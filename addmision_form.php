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
        <img src="images/dav image.jpg" height="300px" width="100%" />
        </div>
        
    </div>
    <!--content-->
    <div class="content">
    	<div class="content_div"></div>
     
        <h4 class="bold">ADDMISSION FORM:</h4>
         <p class="para">
         	<form method="post" action="adm_code.php">
            	<table width="100%">
                	<tr>
                    	<td>Name *</td>
                        <td>:</td>
                        <td><input type="text" name="name" title="Enter Name"/></td>
                    </tr>
                    <tr>
                    	<td>Father Name *</td>
                        <td>:</td>
                        <td><input type="text" name="fname"  title="Enter Father Name" /></td>
                    </tr>
                    <tr>
                    	<td>Gender *</td>
                        <td>:</td>
                        <td>
                        	<select name="gender" title="Select Gender">
                            	<optgroup label="Select Gender">
                                <option>Male</option>
                                <option>Female</option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    	<td>Contact No. *</td>
                        <td>:</td>
                        <td><input type="mobile" name="mobile" title="Mobile" /></td>
                    </tr>
                    <tr>
                    	<td>Addmission Class *</td>
                        <td>:</td>
                        <td>
                        	<select name="class" title="Select Class">
                            	<optgroup label="Select Class">
                                <?php
								include 'config.php';
								
									$class=mysqli_query($conn,"select * from acadamics");
									while($clas=mysqli_fetch_array($class))
									{
										
										echo '<option>'.$clas['aname'].'</option>';
									}
									
								?>
                                
                                </optgroup>
                            </select>
                        </td>
                        </tr>
                        <tr>
                    	<td>Religion *</td>
                        <td>:</td>
                        <td>
                        	<select name="religion" title="Select Religion">
                            	<optgroup label="Select Religion">
                               
                               
                                <option>Hinduism</option>
                                 <option>Islam</option>
                                 <option>Jainism</option>
                                <option>Sikhism</option>
                                <option>Buddhism</option>
                                <option>Christianity</option>
                                
                                </optgroup>
                            </select>
                        </td>
                        </tr>
                        <tr>
                    	<td>Present Address *</td>
                        <td>:</td>
                        <td><textarea name="address" title="Enter Present Address"></textarea></td>
                    </tr>
                    <tr>
                    	<td>Permanent Address *</td>
                        <td>:</td>
                        <td><textarea name="paddress" title="Enter Permanent Address"></textarea></td>
                    </tr>
                    <tr>
                    	<td></td>
                        <td></td>
                        <td><input type="submit" name="save" value="Submit"  class="btn" />
                        	<input type="reset" value="Reset" class="btn" />
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
 <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			//echo '<li>',$msg,'</li>';
			echo '<script>alert("'.$msg.'")</script>'; 
		}
		
		unset($_SESSION['ERRMSG_ARR']);
	}
?>