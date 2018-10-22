<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>
<body>
  <h3 align="right"><a href="login.php">Admin Login</a></h3>
  <h1 align="center"> Student Record Management System</h1>
  <form action="index.php" method="post">
  	<table border="1" width="50%" align="center">
  		<tr>
  			<td colspan="2" align="center">Student info</td>
  		</tr>
  		<tr>
  			<td>Choose Standerd</td>
  			<td>
  			  <select name="std" required>
  				<option value="1">1st</option>
  				<option value="2">2nd</option>
  				<option value="3">3rd</option>
  				<option value="4">4th</option>
  				<option value="5">5th</option>
  				<option value="6">6th</option>
  			  </select>
  			</td>
  		</tr>
  		<tr>
  			<td>Roll no.</td>
  			<td><input type="text" name="rollno" required></td>
  		</tr>
  		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td></tr>
  	</table>
  </form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
  $std=$_POST['std'];
  $rollno=$_POST['rollno'];
  include('dbcon.php');
  include('function.php');
  showdetails($std,$rollno);
 }
?>
