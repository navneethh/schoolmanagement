<?php
error_reporting(0);
session_start();
include 'config.php';

if(!empty($_SESSION['user']))
{
	
}
else
{
	header('location:index.php');
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php

if(isset($_REQUEST['pid']))
{
?>
Edit Faculity
<?php
}
else
{
?>
Add Faculity
<?php
}
?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">ALGU SMARAK INTER-COLLEGE</div>
    <div id="menu">
    	<ul>
        	<li><a href="admin_home.php" title="Home">Home</a></li>
                <li><a href="add_faculty.php" title="Faculties">Faculties</a></li>
                <li><a href="add_facilities.php" title="Facilities">Facilities</a></li>
                <li><a href="add_news.php" title="News">News</a></li>
                <li><a href="add_picture.php" title="Picture Gallery">Picture Gallery</a></li>
        </ul>
        <br />
<br style="clear:both;" />

    </div>
  
  <!--slide bar-->
    
    	<div class="sidebar_menu_admin">
        	<ul>
            	<li><a href="academics.php" title="Academic">Academic</a></li>
                <li><a href="students.php" title="Students">Students</a></li>
                <li><a href="feedback.php" title="Feedback">Feedback</a></li>
                <li><a href="add_result.php" title="Results">Results</a></li>
                <li><a href="add_activities.php" title="Activities">Activities</a></li>
                <li><a href="logout.php?id=10" title="Logout">Logout</a></li>
          </ul>
            
        </div> 
  
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
      <?php
               if(isset($_REQUEST['pid']))
			   {
				   echo '<h4 class="bold">Edit Faculties:</h4>';
			   }
			   else
			   {
				   
       echo '<h4 class="bold">Add Faculties:</h4>';
			   }
			   ?>
         <p class="para">
         	<form method="post" enctype="multipart/form-data">
           	  <table  align="center" border="1">
              <?php
               if(isset($_REQUEST['pid']))
			   {
				  // $rid=mysql_query("SELECT rid FROM results where sid='".$_REQUEST['eid']."'");
//				
//				$test2=mysql_fetch_array($rid);
				
				  $result=mysqli_query($conn,"SELECT * FROM facualty where pid='".$_REQUEST['pid']."'");
				
				$test3=mysqli_fetch_array($result); 
				
				
			   }
              
                ?>
                <tr>
                <td>Faculty Name:</td>
            <td><input type="text" name="name" title="Faculty Name"  value="<?php if(isset($_REQUEST['pid'])) { echo $test3['name'];} ?>" /></td>
          </tr>
          <tr>
                <td>Qualification:</td>
            <td><input type="text" name="qual" title="Qualification"  value="<?php if(isset($_REQUEST['pid'])) { echo $test3['qualification'];} ?>" /></td>
          </tr>
           <tr>
                <td>Contact:</td>
            <td><input type="mobile" name="mobile" title="Contact Number"  value="<?php if(isset($_REQUEST['pid'])) { echo $test3['contact'];} ?>" /></td>
          </tr>
          
          <tr>
                <td>Discipline:</td>
            <td>
            <select name="dis">
            	<optgroup label="Select Faculty Discipline">
                      <?php
                       $rid=mysqli_query($conn,"SELECT * FROM disciplines");
				
						while($test2=mysqli_fetch_array($rid))
						{
							echo '<option>'.$test2['fname'].'</option>';
						}
                      ?>      
                </optgroup>
            </select>
            </td>
          </tr>
         
         		 <tr>
                <td>Image:</td>
            <td> <input type="hidden" name="MAX_FILE_SIZE" value="16000000 <?php if(isset($_REQUEST['pid'])) { echo $test3['pic'];} ?>" />
							
		<input type="file" name="userfile"  /><br />
<?php if(isset($_REQUEST['pid'])) { echo $test3['pic'];} ?></td>
          </tr>
            
          <tr>
         
          <td colspan="2" align="center">
		  <?php
          if(isset($_REQUEST['pid']))
		   {
			  
		?>
        <input type="submit" name="up" value="Update" class="btn" title="Add New Activity" />
        <?php
		  }
		  else
		  {
			  ?>
           
            <input type="submit" name="acd" value="Submit" class="btn" title="Add New Activity" />
        
              
              <?php
		  }
		
		  ?>
          </td>
            </tr>
            </table>
	</form>
            <?php
			
			if(isset($_POST['up']))
				{
					$uploaddir='images/';
	$uploadfile=$uploaddir.basename($_FILES['userfile']['name']);
	
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))
{
	echo "file uploaded!";
}
$fp      = fopen($uploadfile, 'r');
$content = fread($fp, filesize($uploadfile));
$content = addslashes($content);
fclose($fp);

if($fileName)
{
	mysqli_query($conn,"UPDATE facualty SET name='".$_POST['name']."',qualification='".$_POST['qual']."',contact='".$_POST['mobile']."',pic='$fileName' WHERE pid='".$_REQUEST['pid']."'");
}
else
{
mysqli_query($conn,"UPDATE facualty SET name='".$_POST['name']."',qualification='".$_POST['qual']."',contact='".$_POST['mobile']."',pic='".$test3['pic']."' WHERE pid='".$_REQUEST['pid']."'");
}
					
mysql_close();
echo "<br>File $fileName uploaded<br>";


					header("location:add_faculty.php");
					
				}
				
              if(isset($_POST['acd']))
				{
					
					$rid=mysqli_query($conn,"SELECT * FROM disciplines where fname='".$_POST['dis']."'");
				
					$test2=mysql_fetch_array($rid);
					
					
					$uploaddir='images/';
	$uploadfile=$uploaddir.basename($_FILES['userfile']['name']);
	
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))
{
	echo "file uploaded!";
}
$fp      = fopen($uploadfile, 'r');
$content = fread($fp, filesize($uploadfile));
$content = addslashes($content);
fclose($fp);


mysqli_query($conn,"insert into facualty(name,qualification,contact,pic) values('".$_POST['name']."','".$_POST['qual']."','".$_POST['mobile']."','$fileName')");

mysql_close();
echo "<br>File $fileName uploaded<br>";

				header("location:add_faculty.php");
				
				}
              
              ?>
                               
         
        <br />
        <div class="content_foot"></div>
        </p>
        
    </div>
    
    <br style="clear:both;" /><br /><br />
<br />

<!--
     <div class="footer"></div>
     -->
    
</div>
 <?php
 include 'footer.php';
 ?>
</body>
</html>
