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
?>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
	<table align="center" border="1" width="50%" margin-top:"40px">
		<tr>
			<td>Roll No.</td>
			<td><input type="text" name="rollno" required placeholder="Enter Rollno."></td>
		</tr>
		<tr>
			<td>Full name</td>
			<td><input type="text" name="name" required placeholder="Enter name"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" required placeholder="Enter city"></td>
		</tr>
		<tr>
			<td>Parents Contact no.</td>
			<td><input type="number" name="pcont" required placeholder="Enter parents no."></td>
		</tr>
		<tr>
			<td>Standerd</td>
			<td><input type="number" name="std" required placeholder="std"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="img1" required="required"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
 if(isset($_POST['submit']))
 {
 	include('../dbcon.php');
 	$rollno=$_POST['rollno'];
 	$name=$_POST['name'];
 	$city=$_POST['city'];
 	$pcont=$_POST['pcont'];
 	$std=$_POST['std'];
 	$imagename=$_FILES['img1']['name'];
 	$tempname=$_FILES['img1']['tmp_name'];
 	
 	move_uploaded_file($tempname,'../dataimg/$imagename');

 	$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES ('$rollno','$name','$city','$pcont','$std','$imagename')";

 	$run=mysqli_query($conn,$qry);
 	if($run==true)
 	{
 		?>
 		<script>
 			alert("data inserted succesfully!");
 		</script>
 		<?php
 	}
 }

?>