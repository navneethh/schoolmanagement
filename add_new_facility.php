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

if(isset($_REQUEST['facid']))
{
?>
Edit Facility
<?php
}
else
{
?>
Add Facility
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
               if(isset($_REQUEST['facid']))
			   {
				   echo '<h4 class="bold">Edit Facilities:</h4>';
			   }
			   else
			   {
				   
       echo '<h4 class="bold">Add Facilities:</h4>';
			   }
			   ?>
         <p class="para">
         	<form method="post" enctype="multipart/form-data">
           	  <table  align="center" border="1">
              <?php
               if(isset($_REQUEST['facid']))
			   {
				 
				  $result=mysqli_query($conn,"SELECT * FROM facilities where facid='".$_REQUEST['facid']."'");
				
				$test3=mysqli_fetch_array($result); 
				
				
			   }
              
                ?>
                <tr>
                <td>Facility:</td>
            <td style="text-transform:capitalize;"><input type="text" name="facility" title="Heading Name"  value="<?php if(isset($_REQUEST['facid'])) { echo $test3['facname'];} ?>" /></td>
          </tr>
         
          <tr>
            <td>Description:</td>
            <td><textarea name="detail" title="Detail of News" ><?php if(isset($_REQUEST['facid'])) { echo $test3['facdescription']; }?></textarea></td>
          </tr>
         		 <tr>
                <td>Image:</td>
            <td> <input type="hidden" name="MAX_FILE_SIZE" value="16000000 <?php if(isset($_REQUEST['facid'])) { echo $test3['pic'];} ?>" />
							
		<input type="file" name="userfile"  /><br />
<?php if(isset($_REQUEST['facid'])) { echo $test3['pic'];} ?></td>
          </tr>
            
          <tr>
         
          <td colspan="2" align="center">
		  <?php
          if(isset($_REQUEST['facid']))
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
	mysqli_query($conn,"UPDATE facilities SET facname='".$_POST['facility']."',facdescription='".$_POST['detail']."',pic='$fileName' WHERE facid='".$_REQUEST['facid']."'");
}
else
{
mysqli_query($conn,"UPDATE facilities SET facname='".$_POST['facility']."',facdescription='".$_POST['detail']."',pic='".$test3['pic']."' WHERE facid='".$_REQUEST['facid']."'");
}
					
mysql_close();
echo "<br>File $fileName uploaded<br>";


					header("location:add_facilities.php");
					
				}
				
              if(isset($_POST['acd']))
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


mysqli_query($conn,"insert into facilities(facname,facdescription,pic) values('".$_POST['facility']."','".$_POST['detail']."','$fileName')");

mysql_close();
echo "<br>File $fileName uploaded<br>";


				
					
					
					header("location:add_facilities.php");
				
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
