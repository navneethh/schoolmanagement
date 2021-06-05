<?php
include 'config.php';

if(isset($_POST['feed']))
{
mysql_query("insert into  feedback(`name`,`email`,`desc`) values('".$_POST['name']."','".$_POST['id']."','".$_POST['description']."')");

header('location:user_feedback.php');

}

?>