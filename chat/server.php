<?php

/**
 * 聊天室服务器  websocket 专用
 */
class Server_socket
{
    private $socket;
    private $accept = [];
    private $hands = [];
    private $userlist = [];
    private $redis ;
    function __construct($host, $port, $max)
    {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_set_option($this->socket, SOL_SOCKET, SO_REUSEADDR, TRUE);
        socket_bind($this->socket, $host,$port);
        socket_listen($this->socket,$max);
        $this->redis = $this->redis();
    }

    public function start()
    {
//        unset($this->accept);
//        unset($this->hands);
//        unset($this->userlist);exit;
        while (true) {
            $cycle = $this->accept;
            $cycle[] = $this->socket;
            socket_select($cycle, $write, $except, null);
            echo 'has';
            foreach ($cycle as $sock) {
                if ($sock == $this->socket) {
                    $this->accept[] = socket_accept($sock);
                    $arr =  array_keys($this->accept);
                    $key = end($arr);
                    $this->hands[$key] = false;
                }else{
                    $length = socket_recv($sock, $buffer, 204800, null);

                    $key = array_search($sock, $this->accept);
                    if (!$this->hands[$key]) {
                        $user_id = $this->getUserId($buffer);;
                        $this->dohandshake($sock,$buffer,$key);
                        $this->userlist[$user_id] = $key;
                        $this->redis->hSet('user_status',$user_id,1);
                        $res = $this->redis->hGetAll('user_status');
                    }else if($length < 1){
                        $this->close($sock);
                    }else{
                        $this->doMessage($buffer,$sock);

                    }
                }
            }
            sleep(1);
        }
    }/* end of start*/

    /**
     * 首次与客户端握手
     */
    public function dohandshake($sock, $data, $key) {
        if (preg_match("/Sec-WebSocket-Key: (.*)\r\n/", $data, $match)) {
            $response = base64_encode(sha1($match[1] . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11', true));
            $upgrade  = "HTTP/1.1 101 Switching Protocol\r\n" .
                "Upgrade: websocket\r\n" .
                "Connection: Upgrade\r\n" .
                "Sec-WebSocket-Accept: " . $response . "\r\n\r\n";
            socket_write($sock, $upgrade, strlen($upgrade));
            $this->hands[$key] = true;
        }
    }/*dohandshake*/

    /**
     * 关闭一个客户端连接
     */
    public function close($sock) {
        $key = array_search($sock, $this->accept);
        socket_close($sock);
        unset($this->accept[$key]);
        unset($this->hands[$key]);
        $user_id = array_search($key, $this->userlist);
        if($user_id){
            unset($this->userlist[$user_id]);
            $this->redis->hSet('user_status',$user_id,0);
        }
    }

    /**
     * 字符解码
     */
    public function decode($buffer) {
        $len = $masks = $data = $decoded = null;
        $len = ord($buffer[1]) & 127;
        if ($len === 126) {
            $masks = substr($buffer, 4, 4);
            $data = substr($buffer, 8);
        }
        else if ($len === 127) {
            $masks = substr($buffer, 10, 4);
            $data = substr($buffer, 14);
        }
        else {
            $masks = substr($buffer, 2, 4);
            $data = substr($buffer, 6);
        }
        for ($index = 0; $index < strlen($data); $index++) {
            $decoded .= $data[$index] ^ $masks[$index % 4];
        }
        return $decoded;
    }

    /**
     * 字符编码
     */
    public function encode($buffer) {
        $length = strlen($buffer);
        if($length <= 125) {
            return "\x81".chr($length).$buffer;
        } else if($length <= 65535) {
            return "\x81".chr(126).pack("n", $length).$buffer;
        } else {
            return "\x81".char(127).pack("xxxxN", $length).$buffer;
        }
    }

    //获取用户user_id
    public function getUserId($data){
        if(preg_match("/user_id=(.*) HTTP/", $data, $match)){
            return $match[1];
        }
    }

    private function redis(){
        $redis = new Redis();
        $redis->connect('127.0.0.1',6379);
        return $redis;
    }

    /*
     * 处理接受的消息
     * **/
    public function doMessage($buffer,$sock){
        if(!$buffer){
            echo '消息为空';
        }
        $data = $this->decode($buffer);
        $info = json_decode($data,true);
        $type = $info['type'];
        print_r($type);
        switch($type)
        {
            //关闭
            case 0:
                echo '关闭客户端';
                $this->close($sock);
                break;
            //发送用户信息
            case 1:
                $to_id = $info['to_id'];
                $send_id = $info['send_id'];
                $data = $this->encode($data);
                if($to_id == 0){
                    $client = $this->accept[$this->userlist[$to_id]];
                    socket_write($client, $data,strlen($data));
                }else{
                    foreach ($this->accept as $client) {
                        $send_sock = $this->accept[$this->userlist[$send_id]];
                        if($send_sock != $client){
                            socket_write($client, $data,strlen($data));
                        }
                    }
                }
                break;
            //群聊
            case 2:

                break;
        }



        print_r($data);

    }

}/* end of class Server_socket*/


?>