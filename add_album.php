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

if(isset($_REQUEST['alid']))
{
?>
Edit Album
<?php
}
else
{
?>
Add Album
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
                <li><a href="add_gallery.php" title="Picture Gallery">Picture Gallery</a></li>
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
               if(isset($_REQUEST['alid']))
			   {
				   echo '<h4 class="bold">Edit Album:</h4>';
			   }
			   else
			   {
				   
       echo '<h4 class="bold">Add Album:</h4>';
			   }
			   ?>
         <p class="para">
         	<form method="post" enctype="multipart/form-data">
           	  <table  align="center" border="1">
              <?php
               if(isset($_REQUEST['alid']))
			   {
				  // $rid=mysql_query("SELECT rid FROM results where sid='".$_REQUEST['eid']."'");
//				
//				$test2=mysql_fetch_array($rid);
				
				  $result=mysqli_query($conn,"SELECT * FROM albums where albumid='".$_REQUEST['alid']."'");
				
				$test3=mysqli_fetch_array($result); 
				
				
			   }
              
                ?>
                <tr>
                <td>Name:</td>
            <td style="text-transform:capitalize;">
            <input type="text" name="naam" title="Name"  value="<?php if(isset($_REQUEST['alid'])) { echo $test3['name'];} ?>" /></td>
          </tr>
         
          <tr>
            <td>Description:</td>
            <td><textarea name="detail" title="Description" ><?php if(isset($_REQUEST['alid'])) { echo $test3['desc']; }?></textarea></td>
          </tr>
         		
            
          <tr>
         
          <td colspan="2" align="center">
		  <?php
          if(isset($_REQUEST['alid']))
		   {
			  
		?>
        <input type="submit" name="up" value="Update" class="btn" title="Add New Album" />
        <?php
		  }
		  else
		  {
			  ?>
           
            <input type="submit" name="acd" value="Submit" class="btn" title="Add New Album" />
        
              
              <?php
		  }
		
		  ?>
          
           <?php
			
			if(isset($_POST['up']))
			{
				mysqli_query($conn,"update albums set `name`='".$_POST['naam']."', `desc`='".$_POST['detail']."' where albumid='".$_REQUEST['alid']."'");
				
				header("location:add_gallery.php");
			}
			
              if(isset($_POST['acd']))
				{
				
					mysqli_query($conn,"insert into albums(`name`,`desc`) values('".$_POST['naam']."','".$_POST['detail']."')");
					
					header("location:add_gallery.php");
				
				}
              
              ?>
          
          
          </td>
            </tr>
            </table>
	</form>
               
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
