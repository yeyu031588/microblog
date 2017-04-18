<?php
require_once('server.php');
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->hSet('user_status',111,1);
$res = $redis->hGetAll('user_status');
var_dump($res);
?>