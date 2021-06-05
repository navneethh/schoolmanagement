<?php
include 'config.php';
if(isset($_REQUEST['did']))
{
	mysql_query("delete from marks where sid='".$_REQUEST['did']."'");
	
	header('location:add_result.php');
}
?>