
<?php

if(isset($_POST['submit']) && $_POST['msg']!=''){
$host="127.0.0.1";
$port=80812;
$socket=socket_create(AF_INET,SOCK_STREAM,0) or die('Not Created');

socket_connect($socket,$host,$port) or die('Not Connect');

$msg=$_POST['msg'];

socket_write($socket,$msg,strlen($msg));

$reply=socket_read($socket,1024);
$reply=trim($reply);
echo $reply;

socket_close($socket);

}



?>
<form method="post">
<input type="text" name="msg"/>
<input type="submit" name="submit"/>
</form>
