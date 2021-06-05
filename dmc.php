<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mark Sheet</title>
<style type="text/css">
 
 h1,h4
 {
	 text-align:center;
 }
 
 th,td
 {
	 text-align:left;
 }
 
</style>
</head>

<body>
<h1>ALGU SMARAK INTER-COLLEGE</h1><br />


<h4>Detailed Mark Sheet</h4>

<table>
	<tr>
   	  <td>Name: </td>
      <th class="th"><?php echo $_SESSION['st_name']; ?></th>
  </tr>
    <tr>
   	  <td>Class: </td>
      <th class="th"><?php echo  $_SESSION['aname']; ?></th>
    </tr>
    <tr>
   	  <td>Roll Number.: </td>
      <th class="th"><?php echo $_SESSION['aca_roll']; ?></th>
    </tr>
</table><br /><br />

<?php
$sub=mysql_query("select * from marks where sid='".$_SESSION['id']."'");
$result=mysql_fetch_array($sub);



?>
<table width="50%" align="center">
	<tr>
    	<th width="34%" >Subject</th>
        <th width="34%">Obtained Marks</th>
        <th width="32%">Total Marks</th>
    </tr>
    <tr>
    <td>English</td>
    <td><?php echo $result['eng'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Computer</td>
    <td><?php echo $result['com'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Maths</td>
    <td><?php echo $result['maths'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Chemistry</td>
    <td><?php echo $result['chem'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Biology</td>
    <td><?php echo $result['bio'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Statics</td>
    <td><?php echo $result['stat'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <td>Physics</td>
    <td><?php echo $result['phy'];?></td>
    <td>100</td>
    </tr>
    <tr>
    <th>Total</th>
    <th><?php echo $result['phy']+$result['stat']+$result['bio']+$result['chem']+$result['maths']+$result['com']+$result['eng']; ?></th>
    <th>700</th>
    </tr>
    
</table>
</body>
</html>