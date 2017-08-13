<?php
require("e/class/connect.php");
require("e/class/db_sql.php");
$link=db_connect();
$empire=new mysqlquery();
$id=(int)$_GET['id'];
if($id<>0)
{
	$r=$empire->fetch1("select bt from www_92game_net_ecms_torrent where id='$id' limit 1");
	$bt=$r['bt'];

	$usql=$empire->query("update www_92game_net_ecms_torrent set onclick=onclick+1 where id='$id' limit 1");
}


Header("Location:http://file.bt0.com/$bt");

db_close();
$empire=null;

?>

