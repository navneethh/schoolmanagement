<?php
error_reporting(0);
session_start();
include 'config.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Merit List</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">ALGU SMARAK INTER-COLLEGE</div>
    <div id="menu">
    	<ul>
        	<li><a href="user_academics.php" title="Acadamics">Acadamics</a></li>
            <li><a href="facility.php" title="Facities">Facilities</a></li>
            <li><a href="user_activities.php" title="Activities">Activities</a></li>
            <li><a href="faculty.php" title="Faculty">Faculty</a></li>
            <li><a href="discipline.php" title="Disciplines">Disciplines</a></li>
            <li><a href="position_holder.php" title="Position Holders">Position Holders</a></li>
            <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
        </ul>
        <br />
<br style="clear:both;" />

    </div>
  
  <!--slide bar-->
    <div class="head">
    	<div class="sidebar_menu">
        	<ul>
            <li><a href="index.php" title="Home">Home</a></li>
        <li><a href="scholarship.php" title="Scholarship">Scholarship</a></li>
        <li><a href="result.php" title="Result">Result</a></li>
        <li><a href="addmision_form.php" title="Online Admissions">Online Admissions</a></li>
        <li><a href="meritlist.php" title="Meritlists">Meritlists</a></li>
        <li><a href="gallery.php" title="Gallery">Gallery</a></li>
        <li><a href="user_feedback.php" title="Feedback">Feedback</a></li>
        <li><a href="all_admissions.php" title="Admission">Admission</a></li>
        	</ul>
            
        </div> 
        <div id="slide">
        <img src="images/dav image.jpg" height="300px" width="100%" />
        </div>
        
    </div>
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">MERIT LIST:</h4>
         <p class="para">
         	<form method="post" action="adm_code.php">
           	  <table  align="center" class="tab" border="1">
                <tr>
                	<th class="bold th">S-No</th>
                    <th class="bold th">Name</th>
                    <th class="bold th">F-name</th>
                    <th class="bold th">O-Marks</th>
                </tr>
                
                <?php
				//$result=mysql_query("SELECT a.st_name as st_name, a.st_fname as st_fname, m.total as total from student_admission a, marks m where a.aid=m.sid ");
			//	$result=mysql_query("SELECT a.aca_id,a.aca_marksobtained,s.st_name,s.st_fname FROM student_admission as s inner JOIN academics as a ON s.st_id=a.st_id where s.st_id=a.st_id and a.aca_marksobtained>=(a.aca_totalmarks*(80/100))");
			 
			 $query="SELECT a.aca_id,a.aca_marksobtained,s.st_name,s.st_fname FROM student_admission as s inner JOIN studunt_academic as a ON s.st_id=a.st_id where s.st_id=a.st_id and a.aca_marksobtained>=(a.aca_totalmarks*(80/100))";
			 
			 
				$result=mysqli_query($conn,$query);
				$rows=mysqli_num_rows($result);
				
				
				$j=1;
				
				while($test=mysqli_fetch_array($result))
				{
					
				echo '<tr>';
				
					
				echo '<td>'.$j.'</td>';
				
				
                	echo '<td>'.$test['st_name'].'</td>';
                    echo '<td>'.$test['st_fname'].'</td>';
                   echo '<td>' .$test['aca_marksobtained'].'</td>';
				  
                    
                echo '</tr>';
				$j++;
				
				}
				?>
                </table>
               
         	</form>
        <br />
        <div class="content_foot"></div>
        </p>
        
    </div>
    
    <!--Sidebar Starts-->
    <div class="sidebar">
    	<div class="sidebar_content"></div>
        <div class="ads">
        <marquee direction="up" scrollamount="2" id='scroll_stop' style="height:300px;" onMouseOver="document.getElementById('scroll_stop').stop();" onMouseOut="document.getElementById('scroll_stop').start();">
        <?php
        $result=mysqli_query($conn,"select * from  news");
		while($test=mysqli_fetch_array($result))
        {        
        ?>
        
       <?php echo '<strong>'.$test['heading'].'</strong>'.'<br />';?>
        <?php echo '<strong>Date:'.$test['date'].'</strong>'.'<br />';?>
		 <?php echo '<strong>Details:</strong>'.$test['details'].'<br /><br/>';}?>
   
        </marquee>
        </div>
        	
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
