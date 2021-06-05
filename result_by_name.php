<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>
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
    <div id="slide"> <img src="images/dav image.jpg" height="300px" width="100%" /> </div>
  </div>
  <!--content-->
  <div class="content">
    <div class="content_div"></div>
    <h4 class="bold">Search Result:</h4>
    <p class="para"> <a href="result_by_roll.php" class="roll" title="Search By Student's Roll No">Search By Roll No</a>
    <form method="post">
      <fieldset style="width:50%;margin:30px 50px auto 200px;">
        <table >
          <tr>
            <td>Name:</td>
            <td><input type="text" name="name" title="Enter Name" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="search" value="Search" class="btn" title="Search" /></td>
          </tr>
        </table>
      </fieldset><br />

      
      <?php
                		if(isset($_POST['search']))
						{
							
							$result=mysql_query("SELECT ad.st_id, a.aca_roll, a.aca_marksobtained, a.aca_totalmarks, ad.aid, ad.st_name FROM studunt_academic AS a INNER JOIN student_admission AS ad ON a.st_id = ad.st_id WHERE a.st_id = ad.st_id and ad.st_name='".$_POST['name']."'");
							if(mysql_num_rows($result)>0)
							{
								echo '<table  align="center" class="tab" border="1">';
							echo '<tr>';
								echo '<th class="bold th">Name</th>';
								echo '<th class="bold th">Class</th>';
								echo '<th class="bold th">Roll No</th>';
								echo '<th class="bold th">Obtained Marks</th>';
								echo '<th class="bold th">Total Marks</th>';
								echo '<th class="bold th">Print/Preview</th>';
								echo '</tr>';
							}
							else
							{
								echo '<p style="text-align:center;">Invalid Name!</p>';
							}
							while($test=mysql_fetch_array($result))
							{
								$_SESSION['id']=$test['st_id'];
								$_SESSION['st_name']=$test['st_name'];
								
								$_SESSION['aca_roll']=$test['aca_roll'];
								$_SESSION['aca_totalmarks']=$test['aca_totalmarks'];
								
								$class=mysql_query("SELECT aname FROM  acadamics where aid='".$test['aid']."'");
								$cla=mysql_fetch_array($class);
								$_SESSION['aname']=$cla['aname'];
								echo '<tr>';
								
									echo '<td>'.$test['st_name'].'</td>';
									echo '<td>'.$cla['aname'].'</td>';
									echo '<td>'.$test['aca_roll'].'</td>';
									echo '<td>'.$test['aca_marksobtained'].'</td>';
									echo '<td>'.$test['aca_totalmarks'].'</td>';
									echo "<td><a href='dmc.php'>Print/Preview</a></td>";
								echo '</tr>';
							}
							echo ' </table>';
							
						}
                
                	?>
      
     
     
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
  <br style="clear:both;" />
  <br />
  <br />
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
