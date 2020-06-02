<?php

	


 if(isset($_POST['submit']))
	 
 {
 $conn = mysqli_connect('localhost','root',"",'itcorner');
	 
	 $name = $_POST['name'];
 	 $email = $_POST['email'];
   $userid = $_POST['userid'];
	 $pass = $_POST['password']; 

	 
  $sql = " insert into student	(user_id,name,email,password) values ('$userid','$name',
 '$email','$pass')";

 $result = mysqli_query($conn,$sql);

	echo "<script>  alert('data inserted successfully') </script>";
	
 }
  
else
{
echo "<script>  alert('data inserted not  successfully')</script>s";
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
   	<th>edit</th>
   </tr>	
   <?php
		 $conn = mysqli_connect('localhost','root',"",'itcorner');
		$q = " select * from student";
		$result = mysqli_query($conn,$q);
		
		while($row = mysqli_fetch_array($result))
		{
		?>	

   <tr>
     <td><?php echo $row[0] ;?></td>
     <td><?php echo $row[1] ;?></td>
     <td><?php echo $row[2] ;?></td>
     <td><?php echo $row[3] ;?></td>
     <td>
     	<a href="studentupdate.php?id=<?php echo $row['userid'];?>" class="btn btn-danger">edit</a>
     </td>
		</tr>
		<?php
		}
		?>
   </table>
</body>
</html>