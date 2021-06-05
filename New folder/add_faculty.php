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
<title>Faculties</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">DAV Institute of Management</div>
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
     
        <h4 class="bold">FACULTIES:</h4>
        <h3 ><a href='add_new_facility.php' class='copy1' style="padding-left:10px;"  title='Click to Add Facilities'> Add Faculties
					</a></h3>

         <p class="para">
   	  <form method="post">
           	  
                <?php
				$result=mysqli_query($conn,"SELECT * from facualty");
				
				while($test=mysqli_fetch_array($result))
				{
					$id=$test['pid'];
					
					echo '<div  style="float:left;height:190px; width:180px;padding-left:10px;border:1px #000 solid;margin-left:5px;margin-bottom:5px;border-radius:5px;">';
					
						echo '<img style="height:100px;width:100px;margin:5px auto auto 35px;" src="images/'.$test['pic'].'"/><br>';
						echo '<div style="text-align:center">';
						echo '<div>'.$test['name'].'</div>';
						echo '<div>'.$test['qualification'].'</div>';
						echo '<div>'.$test['contact'].'</div>';
						echo "
					<a href='add_new_faculty.php?pid=$id' title='Edit Album' style='color:#000;font-weight:bold;'>
					<img src='images2/edit.png'  style='height:20px;width:20px;'></a>  
					
					<a href='delete.php?pid=$id' title='Delete Album' style='color:#000;font-weight:bold;margin-left:10px;'>
					<img src='images2/DeleteRed.png'  style='height:20px;width:20px;'>
					</a>";
					echo '</div>';
					echo '</div>';
				}
			
				
				?>
     
               
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
</div>
 <?php
 include 'footer.php';
 ?>
</body>
</html>
 