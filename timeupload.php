<?php
$conn = mysqli_connect('localhost','root','','itcorner');


 if(isset($_POST['submit']))
 {

	 $class = $_POST['class'];
	 $division = $_POST['division'];

	 /*$file = $_FILES['file']
	
	$sql = " insert into  utimetable(class,division) values('$class','$division')";
	 $result = mysqli_query($conn,$sql);
	 if($result)
	 {
		 echo " data inserted succfully";
	 }
	else
	{
		echo " data not inserted succeffully";
	}
 }
*/
  $file = $_FILES['file'];
	
	$filename = $file['name'];
  $tmp_name = $file['tmp_name'];
  
	$filecheck =  explode('.',$filename);

  $fileext = strtolower(end($filecheck));
	
	$store = array('jpg','png','jpeg','pdf','doc');
	 if(in_array($fileext,$store))
	 {
		 $destination = "timetable/".$filename;
		 
		 	if(move_uploaded_file($tmp_name,$destination))
		 {
			 echo  "<script>  alert('filed uploaded succefully'); </script>";
				//header('location:facultyprofile.php?userid=""');
		 }
		 else
		 {
			 echo " file not uploaded succfully";
		 }
		 
	 }
 $sql = " insert into  utimetable(class,division,timetable) values('$class','$division','$destination')";
	 $result = mysqli_query($conn,$sql);

}  

 //header('location:facultylogin/loginfaculty.php');	



?>