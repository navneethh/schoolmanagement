<?php
error_reporting(0);
session_start();
include 'config.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<!--main div-->
<div class="wrapper">

<!--header-->
	<div id="header">ALGU SMARAK INTER-COLLEGE</div>
   <br />

<br />
 
 
    <!--content-->
    <div class="content" style="margin-left:150px;width:">
    
    	<div class="content_div"></div>
     
        <h4 class="bold">Login:</h4>
         <p class="para">
         	<form method="post">
           	  <table  align="center"  border="1">
                <tr>
                	<th class="bold th">UserName</th>
                    <td><input type="text" name="uname" /> </td>
                    
                   
                </tr>
                <tr>
                <th class="bold" align="left">Password</th>
                <td><input type="password" name="pwd" /> </td>
                </tr>
                
                <tr>
                	<td colspan="2" align="center"><input type="submit" name="login" value="LogIn" class="btn"/></td>
                </tr>
             
            
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
 <?php
             	if(isset($_POST['login']))
             	{
					$result=mysqli_query($conn,"SELECT * from admin  where user='".$_POST['uname']."' and pass='".$_POST['pwd']."'");
				    $test=mysqli_fetch_array($result);
					
					$_SESSION['user']=$test['user'];
					
					if($_POST['uname']=="")
					{
						
					?>
                    <script>
						alert("Please Fill Useranme!");
						window.location="admin.php";
					</script>
				<?php
					}
					elseif($_POST['pwd']=="")
                {
					?>
                     <script>
						alert("Please Fill Password!");
						window.location="admin.php";
					</script>
                    <?php
				}
				elseif($test['user']!=$_POST['uname'])
				{
					?>
                    <script>
						alert("Invalid Username!");
						window.location="admin.php";
					</script>
                    <?php
				}
				elseif($test['pass']!=$_POST['pwd'])
				{
				?>
                <script>
						alert("Invalid Password!");
						window.location="admin.php";
					</script>
                <?php
				
                }
				elseif(($test['user']==$_POST['uname']) && ($test['pass']==$_POST['pwd']))
				{
				//	header('location:admin_home.php');
				
				?><script>
				window.location="admin_home.php";
				</script><?php
					
				}
				}
             ?>