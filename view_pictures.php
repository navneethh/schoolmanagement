<?php
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
     
        <h4 class="bold">PICTURE GALLERY:</h4>
         <p class="para">
         	<h3><a href="gallery.php" class="copy1" style="padding-left:10px;">GO BACK</a></h3>
         
       <?php
				if(isset($_REQUEST['alid']))
					{
				$albums=mysqli_query($conn,"select * from  albumpics where albumid='".$_REQUEST['alid']."'");
				if(mysqli_num_rows($albums)<1)
				{
					echo "<strong>There is no pictures available in this Album!</strong>";
				}
				
				while($pic=mysqli_fetch_array($albums))
				{
					$id=$pic['picid'];
					$aid=$pic['albumid'];
					echo '<div style="float:left;margin:30px;">';
					echo '<div style="float:left;height:130px; width:180px;padding-left:10px;border:1px #000 solid;margin-left:5px;padding-top:10px;border-radius:5px;text-align:center;">';			
					echo '<img src="images/'.$pic['pic'].'" style="height:100px;width:100px;"/>';
					
					
					echo '<div>'.$pic['name'].'</div>';
					
					echo '</div>';
					
					echo '</div>';
				}
					}
               ?>
             
       
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