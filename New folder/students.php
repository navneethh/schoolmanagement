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
<title>Students</title>
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
                <li><a href="activities.php" title="Activities">Activities</a></li>
                <li><a href="logout.php?id=10" title="Logout">Logout</a></li>
          </ul>
            
        </div> 
  
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">Students:</h4>
         <p class="para">
         	<form method="post">
           	  <table  align="center" class="tab" border="1">
                <tr>
                <th class="bold th">Sr No.</th>
                	<th class="bold th">Name</th>
                    <th class="bold th">Class</th>
                    <th class="bold th">Shift</th>
                    <th class="bold th">Email</th>
                    <th class="bold th">Skill</th>
                    <th class="bold th">Other</th>
                    <th class="bold th">Edit</th>
                    <th class="bold th">Delete</th>
                  
                </tr>
                
                <?php
				$result=mysqli_query($conn,"SELECT a.aid,a.adescription,a.aname,s.* FROM students as s inner JOIN acadamics as a ON s.class=a.aid where s.class=a.aid");
				$i=1;
				while($test=mysqli_fetch_array($result))
				{
					//$id=$test['st_id'];
					//echo $id;
					
					//$_SESSION['stname']=$test['st_name'];
//					$_SESSION['aname']=$test['aname'];
					$id=$test['sid'];
					$_SESSION['clas']=$test['class'];
				echo
                '<tr>';
					echo '<td>'.$i.'</td>';
                	echo '<td>'.$test['name'].'</td>';
                    echo '<td>'.$test['class'].'</td>';
					 echo '<td>'.$test['shift'].'</td>';
					  echo '<td>'.$test['email'].'</td>';
					   echo '<td>'.$test['skills'].'</td>';
					    echo '<td>'.$test['others'].'</td>';
						echo "<td><a href='edit_student.php?id=$id' title='Edit'>
						<img src='images2/edit.png' style='height:20px;width:20px;'/>
						
						</a></td>";
						echo "<td><a href='delete.php?del=$id' title='Delete'>
						<img src='images2/DeleteRed.png' style='height:20px;width:20px;'/>
						
						</a></td>";
                 echo '</tr>';
				 $i++; 	
					
				}
				?>
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
