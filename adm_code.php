<?php
error_reporting(0);
	//Start session
	session_start();
	
	//Include database connection details
	include 'config.php';
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$name = clean($_POST['name']);
	$fname = clean($_POST['fname']);
	$gender = clean($_POST['gender']);
	$mobile = clean($_POST['mobile']);
	$class = clean($_POST['class']);
	$religion = clean($_POST['religion']);
	$address = clean($_POST['address']);
	$paddress = clean($_POST['paddress']);
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
	if($fname == '') {
		$errmsg_arr[] = 'Father Nname missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'Gender missing';
		$errflag = true;
	}
	if($mobile == '') {
		$errmsg_arr[] = 'Contact missing';
		$errflag = true;
	}
	if($class == '') {
		$errmsg_arr[] ='Class missing';
		$errflag = true;
	}
	if($religion == '') {
		$errmsg_arr[] = 'Religion missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'Address missing';
		$errflag = true;
	}
	if($paddress == '') {
		$errmsg_arr[] = 'Permanent Address missing';
		$errflag = true;
	}

	//Check for duplicate login ID
    
	
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysqli_query($conn,$qry);
		if($result) {
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location:addmision_form.php");
		exit();
	}
	
	$_SESSION['clas']=$_POST['class'];
	
	  echo "yes";
	
	//fetch all class id from database
	if(isset($_POST['save']))
	{
	  
	$aca=mysqli_query($conn,"select * from acadamics where aname='".$_POST['class']."'");
	$clas=mysqli_fetch_array($aca);
	
	$classid=$clas['aid'];
	
	
	//Create INSERT query
	$qry = "INSERT INTO student_admission(`aid`,`st_name`, `st_fname`, `st_gender`, `st_contact`, `st_religion`, `st_address`, `st_paddress`) VALUES('$classid','$name','$fname','$gender','$mobile','$religion','$address','$paddress')";

	mysqli_query($conn,$qry);

	
	$_SESSION['name']=$name;
	$_SESSION['fname']=$fname;
	
//	header('location:online_admision_academic_form.php');
	?><script>
				window.location="online_admision_academic_form.php";
				</script><?php


}
	
	
	
	//Check whether the query was successful or not
	//if($result) {
//		header("location: register-success.php");
//		exit();
//	}else {
//		die("Query failed");
//	}


?>