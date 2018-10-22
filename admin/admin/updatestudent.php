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
 <table align="center">
 	<form action="updatestudent.php" method="post">
 	   <tr>
 		  <th>Standerd</th>
 		  <td><input type="number" name="standred" required placeholder="Enter Standerd"></td>

 	    <th>Name</th>
 	    <td><input type="text" name="stuname" required placeholder="Enter name"></td>

 	    <td colspan="2"><input type="submit" name="submit" value="Search"></td>

 	   </tr>
 	</form>
 </table>
 <table align="center" width="80%" border="1" margin-top="10px">
 	<tr style="background-color: black;color: white;">
 		<th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll No.</th>
        <th>Edit</th> 		
  	</tr>

  	<?php
      if(isset($_POST['submit']))
      {
      	include('../dbcon.php');
      	$standerd=$_POST['standred'];
      	$name=$_POST['stuname'];

      	$qry="SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%' ";

      	$run=mysqli_query($conn,$qry); 

      	if(mysqli_num_rows($run)<1)
        {
      		?>
          <tr><td colspan='5'>No result</td></tr>
          <?php
      	}
      	else  
      	{
      		$count=0;
      		while($data=mysqli_fetch_assoc($run))
      		{
      			$count++;
      			?>
      			<tr align="center">
      				<td><?php echo $count;?></td>
      				<td>
      				<img src="../dataimg/<?php echo $data['image'];?>" style="max-width: 100px;max-height: 100px;" >
      				</td>
      				<td><?php echo $data['name'];?></td>
      				<td><?php echo $data['rollno'];?></td>
      				<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
      			</tr>
      			<?php
      		}
      	}
      }
  	?>
 </table>
</body>
</html>
