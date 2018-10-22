<?php 
  session_start();
  
  if(isset($_SESSION['uid']))
  {
  	echo "";
  }
  else
  {
  	header('location:../login.php');
  }
?>
<?php
 include('header.php');
?>
<div class="admintitle">
    <h3 align="right" padding-right="8px"><a href="logout.php">Logout</a></h3>
	<h1>Welcome to admin dashboard</h1>
</div>
<div class="dashboard">
	<table width= "50%" align="center">
		<tr>
			<td>1.</td>
			<td><a href="addstudent.php">Add student details</a></td>
		</tr>
		<tr>
			<td>2.</td>
			<td><a href="updatestudent.php">Update student details</a></td>
		</tr>
		<tr>
			<td>1.</td>
			<td><a href="deletestudent.php">Delete student details</a></td>
		</tr>
	</table>
</div>
</body>
</html>