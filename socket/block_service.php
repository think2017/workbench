<?php

/**
 *@desc PHP socket服务端示例脚本(阻塞模式)
 *@author Eric.cui
 *@email think2017@gmail.com
 **/

$address = "0.0.0.0";
$port = 8088;

$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or socket_error("create fail");

@socket_set_block($socket) or socket_error("set block fail");

@socket_bind($socket, $address, $port) or socket_error( "bind fail" );

@socket_listen($socket, 32) or socket_error("listen fail");

echo "Binding the socket on $address:$port success!\r\n";
echo "Listening on the socket ...\r\n";

do{
    $conn = @socket_accept($socket) or socket_error("accept fail");

    $buf = socket_read($conn, 1024);

    $resp_msg = "Received OK, msg:" . $buf;

    socket_write($conn, $resp_msg);

    socket_close($conn);

    echo "accept client success!\r\n";
    echo $resp_msg;
    echo "Listening on the socket ...\r\n";
    
}while(true);

socket_close($socket);


function socket_error($prefix_msg)
{
    $error_code = socket_last_error();

    if($error_code){
        $error_msg = socket_strerror($error_code);
        die($prefix_msg . ", code:" . $error_code . ", msg:" . $error_msg);
    }

    die($prefix_msg);
}