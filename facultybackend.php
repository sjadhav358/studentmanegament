<?php
 if(isset($_POST['submit']))
 {
	 $conn = mysqli_connect("localhost","root","","itcorner");

  $name = $_POST['fname'];
 $email = $_POST['femail'];
 $userid = $_POST['fuserid'];
	$pass = $_POST['fpassword']; 

	 
	 $q= " INSERT INTO `faculty`(`name`, `email`, `faculty_id`, `password`)
	 VALUES ('$name','$email','$userid','$pass')";

 $result = mysqli_query($conn,$q);
 if($result)
 {
	 echo " data inserted succfully";
	 $tim =" data inserted successfully";
 }
	 else
	 {
		 echo "data not inserted succfully";
	 }
	 //$sql = mysqli_query($conn,$sql);
	 
 }
 
?>

	<!--
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<table class="table table-striped table-bordered table-hover"> 
   <tr>
   	
   	<th>name</th>
   	<th>email</th>
   	<th>userid</th>
   	<th>password</th>
   </tr>	
   <tr>
   	<td><?php echo $name;?></td>
   	<td><?php echo $email;?></td>
   	<td><?php echo $userid;?></td>
   	<td><?php echo $pass;?></td>
   </tr>
	</table>
</body>
</html>
!-->