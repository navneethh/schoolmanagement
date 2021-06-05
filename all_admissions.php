<?php
session_start();
include 'config.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admissions</title>
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
     
        <h4 class="bold">ADMISSIONS:</h4>
         <p class="para">
         	<form method="post" action="adm_code.php">
           	  <table  align="center" class="tab" border="1">
                <tr>
                	 <th class="bold th">Sr No.</th>
                    <th class="bold th">Name</th>
                    <th class="bold th">F-name</th>
                    <th class="bold th">Gender</th>
                    <th class="bold th">Address</th>
                    <th class="bold th">Per. Address</th>
                    <th class="bold th">Contact</th>
                    <th class="bold th">Religion</th>
                </tr>
                
                <?php
				$result=mysqli_query($conn,"SELECT * FROM  student_admission");
				
				$i=1;
				while($test=mysqli_fetch_array($result))
				{
					
				echo
                '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$test['st_name'].'</td>';
                	echo '<td>'.$test['st_fname'].'</td>';
                    echo '<td>'.$test['st_gender'].'</td>';
                   echo '<td>' .$test['st_address'].'</td>';
				   echo '<td>' .$test['st_paddress'].'</td>';
				   echo '<td>' .$test['st_contact'].'</td>';
				   echo '<td>' .$test['st_religion'].'</td>';
                    
					
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
