<?php
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">ALGU SMARAK INTER-COLLEGE </div>
    <div id="menu">

             <?php
                include 'top-menu.php';
                ?>
    	        <!--<ul>
        	<li><a href="user_academics.php" title="Acadamics">Acadamics</a></li>
            <li><a href="facility.php" title="Facities">Facilities</a></li>
            <li><a href="user_activities.php" title="Activities">Activities</a></li>
            <li><a href="faculty.php" title="Faculty">Faculty</a></li>
            <li><a href="discipline.php" title="Disciplines">Disciplines</a></li>
            <li><a href="position_holder.php" title="Position Holders">Position Holders</a></li>
            <li><a href="contact.php" title="Contact Us">Contact Us</a></li>
              </ul>-->
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
     
        <h4 class="bold">INTRODUCTION:</h4>
         <p class="para">
        <img src="images/p12.jpg" id="img" />
        A nation with an educated youth has the potential to grow into an economic powerhouse and foster the true meaning of equality and socialism.  Today, the country’s education sector is buzzing with new ideas, concepts and thoughts especially management and IT education, which has undergone a significant change.

At Algu Smarak Inter College, it has been our endeavor to fortify the academic standards. The Institute has vigorously been reaffirming its scholarly, academic & value based traditions and inspiring students to look forward for appropriate opportunities to develop new strengths. The emphasis is laid on grooming the students to develop with a global outlook and to be equip them with confidence, intelligence and  ethical values to face the challenges of the world. The vision of the school is to produce well informed and socially responsible citizens.
ASIC stands tall and proud at having produced creative, knowledgeable and capable people who have proven themselves the world over and have established ASIC’s reputation as a school of excellence and holistic learning. 
As a prospective learner, you are invited to explore the programmes that are being offered at the institution, being assured that by joining Algu Smarak Inter College, you will become part of a dynamic and innovative academic environment. The institution is engaged in continuously improving its learning facilities and it aims to generate a culture of participative, intimate and personalized student-teacher relationship and a healthy learning environment.

And, as a stakeholder, and part of the Education fraternity, you are welcome to interact with us and we will be happy to explore initiatives of better future and improve relationships.

We look forward to meet you.
<br><br></b>

Dr. Lalji Yadav
<br>
Head of the Institute</b><br />
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