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
<title>Enter Marks</title>
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
     
        <h4 class="bold">Edit Student's Detail:</h4>
         <p class="para">
         	<form method="post">
           	  <table  align="center"  border="1" width="60%">
               <?php
			   
			   if(isset($_REQUEST['id']))
			   {
				  // $rid=mysql_query("SELECT rid FROM results where sid='".$_REQUEST['eid']."'");
//				
//				$test2=mysql_fetch_array($rid);
				
				  $result=mysql_query("SELECT * FROM students where sid='".$_REQUEST['id']."'");
				
				$test3=mysql_fetch_array($result); 
				
				
			   }
			   
			 	   
			   ?>
               <!--<tr>
               	<th>Select Class</th>
                <td>-->
                      <?php
//					   	$sub=mysql_query("select * from acadamics");
//						while($my=mysql_fetch_array($sub))
//						{
//						echo '<option>'.$my['aname'].'</option>';
//						}
//					   ?>
                    
                <!--</td>               
               </tr>
                    -->
                <tr>
                	<th class="bold th">Name :</th>
                    <td><input type="text" name="naam" value="<?php  if(isset($_REQUEST['id'])) { echo $test3['name']; } ?>" /></td>
                </tr>
                <tr>
                	<th class="bold th">Class :</th>
                    <td>
                    <select name="class">
                    	<optgroup label="Select One">
                   <?php
				   
				  			
				   			$class=mysql_query("select * from acadamics");
									while($clas=mysql_fetch_array($class))
									{
										
										echo '<option>'.$clas['aid'].'</option>';
									}
				 		?>
                    	         </optgroup>          
                    </select>
                    
                  </td>
                </tr>      
                <tr>
              		 <th class="bold th">Shift :</th>
                     <td><input type="text" name="shift" value="<?php  if(isset($_REQUEST['id'])) { echo $test3['shift']; } ?>"/></td>
                </tr>
                <tr>
              		 <th class="bold th">Room No :</th>
                     <td><input type="text" name="room" value="<?php  if(isset($_REQUEST['id'])) { echo $test3['room_no']; } ?>"/></td>
                </tr>
                <tr>
                	<th class="bold th">Email :</th>
                    <td><input type="email" name="email" value="<?php  if(isset($_REQUEST['id'])) { echo $test3['email']; } ?>"/></td>
                </tr>
                          
                <tr>
                	 <th class="bold th">Skill :</th>
                     <td><input type="text" name="skil" value="<?php  if(isset($_REQUEST['id'])) { echo $test3['skills']; } ?>"/></td>
                     
                </tr>
                <tr>
                	 <th class="bold th">Other :</th>
                     <td><input type="text" name="other"value="<?php  if(isset($_REQUEST['id'])) { echo $test3['others']; } ?>" /></td>
                     
                </tr>
               
                <tr>
                	<td colspan="2" align="center">
                    <?php
					
					if(isset($_REQUEST['id'])) {
						
					?>
                    <input type="submit" name="update" value="Update" class="btn" />
                    <?php
					
					}
					else
					{
					?>
                                       
                    
                    <input type="submit" name="save" value="Submit" class="btn" />
                    <?php
					}
					
					
					if(isset($_POST['update']))
					{
						mysql_query("update students set room_no='".$_POST['room']."', class='".$_POST['class']."',name='".$_POST['naam']."',shift='".$_POST['shift']."',email='".$_POST['email']."',skills='".$_POST['skil']."',others='".$_POST['other']."' where sid='".$_REQUEST['id']."'");
						
						header('location:students.php');
					}
					?>
                    
                    
                    
                    
                    
                    
                    
                    </td>
                </tr>
                </table>
                 
         	</form>
            <?php
			if(isset($_REQUEST['sid']))
				{
				$result=mysql_query("SELECT rid FROM results where sid='".$_REQUEST['sid']."'");
				
				$test=mysql_fetch_array($result);
				}
				if(isset($_POST['save']))
				{
				
					mysql_query("insert into marks(sid,eng,maths,chem,bio,com,phy,stat) values('".$_REQUEST['sid']."','".$_POST['eng']."','".$_POST['mat']."','".$_POST['chem']."','".$_POST['bio']."','".$_POST['com']."','".$_POST['phy']."','".$_POST['sta']."')");
					
					header("location:add_result.php");
					
					
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
