<?php
session_start();


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Addmission Form</title>
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
        <img src="images/Campus View.jpg" height="300px" width="100%" />
        </div>
        
    </div>
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">Personal Information Form:</h4>
         <p class="para">
         	<form method="post" action="aca_code.php">
            	<table width="100%">
                	<tr>
                    	<td>Name </td>
                        <td>:</td>
                        <td><?php echo $_SESSION['name']. ' S/D/O '. $_SESSION['fname']; ?></td>
                    </tr>
                    <tr>
                    	<td>Shift *</td>
                        <td>:</td>
                        <td><input type="text" name="shift"  title="Shift of Class" /></td>
                    </tr>
                    <tr>
                    	<td>Room No *</td>
                        <td>:</td>
                        <td>
                        	<input type="text" name="room" title="Enter Room No.">
                            	
                        </td>
                    </tr>
                    <tr>
                    	<td>Email *</td>
                        <td>:</td>
                        <td><input type="email" name="email" title="Enter Email Id" /></td>
                    </tr>
                    <tr>
                    	<td>Skills *</td>
                        <td>:</td>
                        <td>
                        	<input type="text" name="skil"  title="Enter Skills"/>
                        </td>
                        </tr>
                        <tr>
                    	<td>Other *</td>
                        <td>:</td>
                        <td>
                        	<input type="text" name="other"  title="Enter Other Skills"/>
                        </td>
                        </tr>
                                           
                    <tr>
                    	<td></td>
                        <td></td>
                        <td><input type="submit" name="info" value="Submit"  class="btn" />
                        	
                        </td>
                    </tr>
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
        <marquee direction="up" scrollamount="2" id='scroll_stop' onMouseOver="document.getElementById('scroll_stop').stop();" onMouseOut="document.getElementById('scroll_stop').start();">
        <strong>Winter Vacation 2015</strong><br />

        <strong>Date:</strong> 04-12-2015<br />
		<strong>Details:</strong>Winter Vacation will be held on 4th december 2015 to 2nd january...  <strong>more</strong>
        <br />
		<br />

		<strong>Addmission Open 2016</strong><br />

        <strong>Date:</strong> 04-12-2015<br />
		<strong>Details:</strong> Addmission Open F.Sc.(PRE-MEDICAL, PRE-ENGINERING, COMPUTER SCIENCE) FA(GENERAL SCIENCE...  <strong>more</strong>  
        <br />
		<br />
        
        <strong>Hiking Club Organizes trekking in Bara Gali</strong><br />

        <strong>Date:</strong> 04-12-2015<br />
		<strong>Details:</strong> Congratulations to the Hiking Club and its faculty adviser. Assoc Prof Javed Hayat, for oraganizing a...  <strong>more</strong>        
                
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
