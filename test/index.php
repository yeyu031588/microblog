<?php
    $redis = new Redis();
var_dump($redis);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>websocket</title>
    <style>
        .con{width:500px;height:400px;border: 2px solid #ccc;}
    </style>
</head>
<div class="con" id="con">

</div>
<input type="text" id="word">
<body>
<div>
    <button id='send'> 发送</button>
    <button id='close'> 关闭</button>
</div>
</body>
<script src="jquery.js"></script>
<script>
    var user_id = "<?php echo $_GET['user_id']?$_GET['user_id']:0;?>";
    var to_id = "<?php if(isset($_GET['to_id'])){echo $_GET['to_id'];}else{echo 0;}?>";
    var con = document.getElementById("con");
    var socket = new WebSocket('ws://127.0.0.1:3005?user_id='+user_id);
    socket.onopen = function(event) {
        con.innerHTML="<p>connect success </p><p>对话user_is:"+to_id+"</p>";
    };

    socket.onmessage = function(event) {
        var content = event.data;
        if (content.length > 2) {
            var obj = eval('(' + content + ')');
            con.innerHTML=con.innerHTML+"<p>"+obj.send_id+':'+obj.message+"</p>";
        }
    };
    var send = document.getElementById('send');
    send.addEventListener('click', function() {
        var content = window.document.getElementById('word').value;
        var msg = {
            "message" : content,
            "to_id" : to_id,
            "send_id" : user_id,
            "type" : 1,
        };
        msg = JSON.stringify(msg);
        socket.send(msg);
        con.innerHTML=con.innerHTML+"<p>本人："+content+"</p>";

    });

    $('#close').click(function(){
        var msg = {
            "type" : 0,
        };
        msg = JSON.stringify(msg);
        socket.send(msg);
    })

</script>

</html>  