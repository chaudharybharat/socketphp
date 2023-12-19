
<?php
$host="127.0.0.1";
$port=80812;
$socket=socket_create(AF_INET,SOCK_STREAM,0) or die('Not Created');

$result=socket_bind($socket,$host,$port) or die('Not bind');

$result=socket_listen($socket,3) or die('Not Listen');

do{
$accept=socket_accept($socket) or die('Not Accept');
$msg=socket_read($accept,1024) or die('Not accept');
$msg=trim($msg);
echo $msg."\n";
echo "Enter replay";
$reply=fgets(STDIN);
socket_write($accept,$reply,strlen($reply));

}while(true);

socket_close($socket);
?>

