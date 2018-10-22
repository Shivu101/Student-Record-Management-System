<?php 
  session_start();
  if(isset($_SESSION['uid']))
  {
  	echo"";
  }
  else
  {
  	header('location:../login.php');
  }
?>
<?php
 include('header.php');
 include('titlehead.php');
 include('../dbcon.php');
 $sid=$_GET['sid'];
 $sql="SELECT * FROM `student` WHERE `id`='$sid'";
 $run=mysqli_query($conn,$sql);
 $data=mysqli_fetch_assoc($run);
?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
	<table align="center" border="1" width="50%" margin-top:"40px">
		<tr>
			<td>Roll No.</td>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno'];?> required></td>
		</tr>
		<tr>
			<td>Full name</td>
			<td><input type="text" name="name" value=<?php echo $data['name'];?> required></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value=<?php echo $data['city'];?> required></td>
		</tr>
		<tr>
			<td>Parents Contact no.</td>
			<td><input type="number" name="pcont" value=<?php echo $data['pcont'];?> required/></td>
		</tr>
		<tr>
			<td>Standerd</td>
			<td><input type="number" name="std" value=<?php echo $data['standerd'];?> required/></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="img1" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['id'];?>">
			<input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php

/*can anyone solve this plz? Notice: Undefined index: sid in C:\xampp\htdocs\sms\admin\updatedata.php on line 9 <?php include('../connection.php');
    $rolno=$_POST['rollno'];
	$name=$_POST['name'];
    $city=$_POST['city'];	    
    $pcont=$_POST['pcont'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	       $imagename=$_FILES['simg']['name'];
	        $tempname=$_FILES['simg']['tmp_name'];
	         move_uploaded_file($tempname, "../dataimg/$imagename");
	          $qry="UPDATE `student` SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$std', `image` = '$imagename' WHERE `id` = $id";
	           $run=mysqli_query($conn,$qry);
	            if ($run==true) 
	            	{ ?> 
	              <script> alert('Data updated successfuly!');
	            		 window.open('updateform.php?sid=<?php echo $id; ?>','_self');
	              </script>
	               <?php
	                }
	                 ?>﻿


*/
  ?>