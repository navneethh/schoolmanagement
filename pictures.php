<?php
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
<title>Gallery</title>
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
                <li><a href="activities.php" title="Activities">Activities</a></li>
                <li><a href="logout.php?id=10" title="Logout">Logout</a></li>
          </ul>
            
        </div> 
  
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">Gallery:</h4>
        
       <h3 > <a href='add_pictures.php?alid=<?php echo $_REQUEST['alid'];?>' class='copy1' title='Add New Pictures' style='font-weight:bold;'>Add New Pictures</a></h3>
        
         <p class="para">
         
      <div style="height:auto;width:700px;padding-left:80px;text-align:center;">
         
         
         	<form method="post">
              		<?php
					
					if(isset($_REQUEST['alid']))
					{
				$albums=mysql_query("select * from  albumpics where albumid='".$_REQUEST['alid']."'");
				if(mysql_num_rows($albums)<1)
				{
					echo "<strong>There is no pictures available in this Album!</strong>";
				}
				
				while($pic=mysql_fetch_array($albums))
				{
					$id=$pic['picid'];
					$aid=$pic['albumid'];
					echo '<div style="float:left;margin:30px;">';
					echo '<div>			
					<img src="images/'.$pic['pic'].'" style="height:100px;width:100px;"/>
					
					</div>';
					echo '<div>'.$pic['name'].'</div>';
					
					echo "<div>
					<a href='add_pictures.php?picid=$id&albid=$aid' title='Edit' style='color:#000;font-weight:bold;'>
					<img src='images2/edit.png'  style='height:20px;width:20px;'></a>  
					
					<a href='delete.php?picid=$id&albid=$aid' title='Delete' style='color:#000;font-weight:bold;margin-left:10px;'>
					<img src='images2/DeleteRed.png'  style='height:20px;width:20px;'>
					</a></div>";
					
					echo '</div>';
				}
					}
               ?>
       	 </form>
            </div>
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
