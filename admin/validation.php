<?php

 if(isset($_POST['submit']))
 {
  $conn = mysqli_connect('localhost','root',"",'itcorner');
	  $user= $_POST['userid'] ;
 	 $pass =$_POST['password'] ;
	 
	  $query = " select * from student ";
	 $result =mysqli_query($conn,$query);
	$flag=0;
	   while($row = mysqli_fetch_array($result))
		 { 
			  
		 
			     
			  if(($user==$row['user_id'])&& ($pass == $row['password']))
				{
					$flag = 1;
					
				}
			 
		 }
	 
	  if($flag==1)
		{
			echo "<script> alert('login success');</script>";
			header('location:../studentprofile.php?userid='.$user);
		}
	 else
	 {
		 echo "<script> alert('try agian');</script>";
	  header('location:login.php');	 
	 }
	
	 
 }
	
	 
	 
 

?>