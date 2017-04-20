<?php
require_once('server.php');
$server_socket = new Server_socket('127.0.0.1',3005,100);
$server_socket->start();
sleep(1000);
?>