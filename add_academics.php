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
<title>Add Academy</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">ALGU SMARAK INTER-COLLEGE</div>
    <div id="menu">
    	<ul>
        	<li><a href="add_academics.php" title="Home">Home</a></li>
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
                <li><a href="logout.php" title="Logout">Logout</a></li>
          </ul>
            
        </div> 
  
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">Add Acdemics:</h4>
         <p class="para">
         	<form method="post">
           	  <table  align="center" border="1">
              <?php
               if(isset($_REQUEST['aid']))
			   {
				  // $rid=mysql_query("SELECT rid FROM results where sid='".$_REQUEST['eid']."'");
//				
//				$test2=mysql_fetch_array($rid);
				
				  $result=mysql_query("SELECT * FROM acadamics where aid='".$_REQUEST['aid']."'");
				
				$test3=mysql_fetch_array($result); 
				
				
			   }
              
                ?>
                <tr>
                <td>Name:</td>
            <td><input type="text" name="name" title="Academy Name" value="<?php if(isset($_REQUEST['aid'])) { echo $test3['aname'];} ?>" /></td>
          </tr>
          <tr>
            <td>Description:</td>
            <td><textarea name="description"  title="Detail of Academy" ><?php if(isset($_REQUEST['aid'])) { echo $test3['adescription']; }?></textarea></td>
          </tr>
          
          <tr>
          </tr>
          <td colspan="2" align="center">
		  <?php
          if(isset($_REQUEST['aid']))
		   {
			  
		?>
        <input type="submit" name="up" value="Update" class="btn" title="Add New Activity" />
        <?php
		  }
		  else
		  {
			  ?>
           
            <input type="submit" name="acd" value="Submit" class="btn" title="Add New Activity" /></td>
        
              
              <?php
		  }
		
		  ?>
            </tr>
            </table>
	</form>
            <?php
			
			if(isset($_POST['up']))
				{
					mysqli_query($conn,"UPDATE acadamics SET aname='".$_POST['name']."',adescription='".$_POST['description']."' WHERE aid='".$_REQUEST['aid']."'");
					header("location:academics.php");
					
				}
              if(isset($_POST['acd']))
				{
				
					mysqli_query($conn,"insert into acadamics(aname,adescription) values('".$_POST['name']."','".$_POST['description']."')");
					
					header("location:academics.php");
				
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
