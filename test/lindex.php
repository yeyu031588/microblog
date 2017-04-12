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
</div>
</body>
<script>
    var user_id = "<?php echo $_GET['user_id'];?>";
    var con = document.getElementById("con");
    var socket = new WebSocket('ws://127.0.0.1:3005?user_id='+user_id);
    socket.onopen = function(event) {
        con.innerHTML="<p>connect success</p>";
    };

    socket.onmessage = function(event) {
        var content = event.data;
        if (content.length > 2) {
            con.innerHTML=con.innerHTML+"<p>"+content+"</p>";
        }
    };
    var send = document.getElementById('send');
    send.addEventListener('click', function() {
        var content = window.document.getElementById('word').value;
        socket.send(content);

    });

</script>

</html>  