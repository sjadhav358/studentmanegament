<?php

 
 if(isset($_POST['submit']))
	 
 {
 $conn = mysqli_connect('localhost','root',"",'itcorner');
	 echo $id = $_POST['id'];
	 echo $name = $_POST['uname'];
 	 echo $email = $_POST['uemail'];
   echo $userid = $_POST['uuserid'];
	 echo $pass = $_POST['upassword']; 
	 
	 
	 $update = " UPDATE `student` SET `name`='$name',
	 `email`='$email',`userid`='$userid',
	 `password`='$pass' WHERE userid ='$id'";
	 
	 $result =mysqli_query($conn,$update);
	 echo "<script> alert('successfully updated data');</script>";
	 
	 header('location:backend.php');
 }
?>