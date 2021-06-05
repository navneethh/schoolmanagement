<?php
include 'config.php';
if(isset($_REQUEST['fid']))
{
	mysqli_query($conn,"delete from feedback where fid='".$_REQUEST['fid']."'");
	header('location:feedback.php');
}

if(isset($_REQUEST['aid']))
{
	mysqli_query($conn,"delete from acadamics where aid='".$_REQUEST['aid']."'");
	header('location:academics.php');	
}

if(isset($_REQUEST['del']))
{
	mysqli_query($conn,"delete from students where sid='".$_REQUEST['del']."'");
	header('location:students.php');	
}
if(isset($_REQUEST['acid']))
{
	mysqli_query($conn,"delete from activities where aid='".$_REQUEST['acid']."'");
	header('location:activities.php');	
}
if(isset($_REQUEST['nid']))
{
	mysqli_query($conn,"delete from news where nid='".$_REQUEST['nid']."'");
	header('location:add_news.php');	
}
if(isset($_REQUEST['facid']))
{
	mysqli_query($conn,"delete from facilities where facid='".$_REQUEST['facid']."'");
	header('location:add_facilities.php');	
}
if(isset($_REQUEST['alid']))
{
	mysqli_query($conn,"delete from albums where albumid='".$_REQUEST['alid']."'");
	mysqli_query($conn,"delete from albumpics where albumid='".$_REQUEST['alid']."'");
	header('location:add_gallery.php');	
}
if(isset($_REQUEST['picid']))
{
	mysqli_query($conn,"delete from albumpics where picid='".$_REQUEST['picid']."'");
	header("location:pictures.php?alid=".$_REQUEST['albid']."");	
}

if(isset($_REQUEST['pid']))
{
	mysqli_query($conn,"delete from facualty where pid='".$_REQUEST['pid']."'");
	header("location:add_faculty.php");	
}

?>