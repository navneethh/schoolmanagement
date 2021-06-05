<?php
session_start();
if(isset($_REQUEST['id']))
{
	session_destroy();
	header('location:index.php');
}
?>