<?php

 if(isset($_POST['submit']))
 {
  $conn = mysqli_connect('localhost','root',"",'admin');
	 echo  $user= $_POST['userid'] ;
 	 echo $pass =$_POST['password'] ;
	 
	 
	  $query = " select * from faculty ";
	 $result =mysqli_query($conn,$query);
		$flag=0;
	   while($row = mysqli_fetch_array($result))
		 { 
			  
		 
			     
			  if(($user==$row['faculty_id'])&& ($pass == $row['password']))
				{
					$flag = 1;
					
				}
			 
		 }
	 
	  if($flag==1)
		{
			echo "<script> alert('login success');</script>";
			
		}
	 
	 else
	 {
		 echo "<script> alert('try agian');</script>";
	  //header('location:loginfaculty.php');	 
	 }
	 
 }
	
	header('location:../facultyprofile.php?userid='.$user);
 
	 


?>