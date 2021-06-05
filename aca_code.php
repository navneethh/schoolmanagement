<?php
session_start();
include 'config.php';
if(isset($_POST['addqua']))
	{
		$qua=mysql_query($conn,"SELECT st_id FROM student_admission ORDER BY st_id DESC LIMIT 1");
	$qualify=mysql_fetch_array($qua);
	$quaid=$qualify[0];
	
	$qry = "INSERT INTO studunt_academic(`st_id`, `aca_exam`, `aca_year`, `aca_roll`, `aca_marksobtained`, `aca_totalmarks`, `aca_bise`) VALUES('$quaid','".$_POST['exam']."','".$_POST['pass']."','".$_POST['rollno']."','".$_POST['omark']."','".$_POST['tmark']."','".$_POST['bise']."')";
	mysql_query($qry);
	
	header('location:student_data.php');
	
	}
	
if(isset($_POST['info']))
	{
		$class=mysql_query($conn,"select * from acadamics where aname='".$_SESSION['clas']."'");
		$clas=mysql_fetch_array($class);
									
		$qry = "INSERT INTO  students(`class`,`name`, `shift`, `room_no`, `email`, `skills`, `others`) VALUES('".$clas['aid']."','".$_SESSION['name']."','".$_POST['shift']."','".$_POST['room']."','".$_POST['email']."','".$_POST['skil']."','".$_POST['other']."')";
	mysql_query($qry);
	
	header('location:addmision_form.php');
		
	}
?>