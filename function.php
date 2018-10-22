<?php
 function showdetails($std,$rollno){
 	include('dbcon.php');
 	$qry="SELECT * FROM `student` WHERE `standerd`='$std' AND `rollno`='$rollno'";
 	$run=mysqli_query($conn,$qry);
 	if(mysqli_num_rows($run)>0)
 	{
       $data=mysqli_fetch_assoc($run);
       ?>
       <table align="center" border="1" width="70%" style="margin-top:20px;">
       	<tr>
       		<th colspan="3">Student Info</th>
       	</tr>
       	<tr>
       		<td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-height: 150px;max-width: 300px;"></td>
       		<th>Roll no</th>
       		<td><?php echo $data['rollno'];?></td>
       	</tr>
       	<tr>
       		<th>Name</th>
       		<td><?php echo $data['name'];?></td>
       	</tr>
       	<tr>
       		<th>Standerd</th>
       		<td><?php echo $data['standerd'];?></td>
       	</tr>
       	<tr>
       		<th>Parents Contact</th>
       		<td><?php echo $data['pcont'];?></td>
       	</tr>
       	<tr>
       		<th>City</th>
       		<td><?php echo $data['city'];?></td>
       	</tr>
       </table>
       <?php
 	}
 	else{
 	 echo"<script>alert('No data found!');</script>";
 	}
 }
?>