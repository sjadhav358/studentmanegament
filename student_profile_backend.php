<?php

$conn = mysqli_connect('localhost','root','','itcorner');

/*
if(isset($_POST["submit"])) 
{
  $file = $_FILES['sfile'];
	
	$filename = $file['name'];
  $tmp_name = $file['tmp_name'];
  
	$filecheck =  explode('.',$filename);

  $fileext = strtolower(end($filecheck));
	
	$store = array('jpg','png','jpeg');
	 if(in_array($fileext,$store))
	 {
		 $destination = "upload/".$filename;
		 
		 	if(move_uploaded_file($tmp_name,$destination))
		 {
			 echo " filed uploaded succefullyu";
		 }
		 else
		 {
			 echo " file not uploaded succfully";
		 }
		 
	 }


}
*/  

    
echo $name=$_POST['sname'];
echo  $email =$_POST['semail'];
echo  $address =$_POST['saddress'];
echo $userid =$_POST['suserid'];
echo  $mobile =$_POST['smobile'];
echo  $branch =$_POST['sbranch'];
echo  $date =$_POST['sdate'];
//echo  $file =$_POST['sfile'];

$file = $_FILES['sfile'];
	
	$filename = $file['name'];
  $tmp_name = $file['tmp_name'];
  
	$filecheck =  explode('.',$filename);

  $fileext = strtolower(end($filecheck));
	
	$store = array('jpg','png','jpeg');
	 if(in_array($fileext,$store))
	 {
		 $destination = "upload/".$filename;
		 
		 	if(move_uploaded_file($tmp_name,$destination))
		 {
			 echo " filed uploaded succefullyu";
		 }
		 else
		 {
			 echo " file not uploaded succfully";
		 }
		 
	 }

  $q ="UPDATE `student` SET `name`='$name',`email`='$email',`user_id`='$userid',`address`='$address',
	`contact_no`='$mobile',`branch`='$branch',`date`='$date',
	`profile`='$destination' WHERE user_id = '$userid' ";
  /*$q = " insert into student(name,email,address,contact_no,branch,date,profile) 
	values('$name','$email','$address','$mobile','$branch','$date','$destination')";
*/
  $result = mysqli_query($conn,$q);
if($result)
{
	echo "<script>alert('update data successfully')</script>";
   //header('location:studentprofile.php');
}
else
{
	echo "data not inserted";
}
//header('location:studentprofile.php?userid=""');

//$q = " INSERT INTO `student_detaiils`(`name`, `email`, `address`, `userid`, `mobileno`, `branch`, `date') 
//VALUES ('$name',' $email','$address','$userid','$mobile','$branch','$date')";

 
 //mysqli_query($conn,$q);



  


?>
