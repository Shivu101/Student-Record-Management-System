<?php
 include('../dbcon.php');
 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $city=$_POST['city'];
 $pcon=$_POST['pcont'];
 $std=$_POST['std'];
 $id=$_POST['sid'];
 $imagename=$_FILES['img1']['name'];
 $tempimagename=$_FILES['img1']['tmp_name'];
 move_uploaded_file($tempimagename,"../dataimg/$imagename");
 $qry="UPDATE `student` SET `rollno`='$rollno',`name`='name',`city`='$city',`pcont`='$pcon',`standerd`='$std',`image`='$imagename' WHERE `id`=$id ";
 $run=mysqli_query($conn,$qry);
 if($run==true)
 {
 	?>
 	<script>
 		alert('data inserted successfully');
 		window.open('updateform.php?sid=<?php echo $id;?>','_self');
 	</script>
 	<?php
 }
?>