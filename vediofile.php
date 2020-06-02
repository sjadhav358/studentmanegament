<?php
$conn = mysqli_connect('localhost','root','','admin');


 if(isset($_POST['submit']))
 {

	echo $class = $_POST['class'];
	echo $division = $_POST['division'];
	echo $title = $_POST['title'];
	echo $description = $_POST['description'];

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
	
	 print_r($file);
	 
	 $filename = $file['name'];
  $tmp_name = $file['tmp_name'];
  
	$filecheck =  explode('.',$filename);

  $fileext = strtolower(end($filecheck));
	
	$store = array('mp4');
	 if(in_array($fileext,$store))
	 {
		 $destination = "vedio/".$filename;
		 
		 	if(move_uploaded_file($tmp_name,$destination))
		 {
			 echo  "<script>  alert('vedio uploaded succefully'); </script>";
				//header('location:facultyprofile.php?userid=""');
		 }
		 else
		 {
			 echo " file not uploaded succfully";
		 }
		 
	 }
	 
	 
 $sql = " insert into  vedio (class,division,vediolecture,title,description)
 values('$class','$division','$destination','$title','$description')";
	$result = mysqli_query($conn,$sql);
	 
	 

}  
 
//header('location:facultylogin/loginfaculty.php');	
	
?>