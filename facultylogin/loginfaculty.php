<?php 

include('congi.php');



?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	</head>

<style>
  .form-design {
    margin-top: 109px;
    padding: 30px;
    width: 408px;
    background-color: black;
		border: 1px solid;
		color: white;	
}
body
{
	background-color: gainsboro;
}

</style>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-info">
	<a href="../index.html" class="navbar-brand"> Home</a>
</nav>
<div class="container d-flex justify-content-center">
<?php

if(isset($_POST['fsubmit']))
{
 $conn = mysqli_connect('localhost','root',"",'itcorner');
	 $user= $_POST['userid'] ;
	 $pass =$_POST['pass'] ;
	
	 $query = " select * from faculty ";
	$result =mysqli_query($conn,$query);
   $flag=0;
	  while($row = mysqli_fetch_array($result))
		{ 
			 
		
				
			 if(($user==$row['faculty_id'])&&($pass == $row['password']))
			   {
				   $flag = 1;
				   
			   }
			   
			
			
		}
	
	 if($flag==1)
	   {
		   
		   
		   header('location:../facultyprofile.php?userid='.$user);
	   }
	else
	{
		 echo " <script>alert('enter correct user_id and password')</script>";
	 
	}
   
	
}
   
	
	


?>

	<div class="form-design shadow">
	  <h3 class="text-center text-white">Faculty Login</h3>
	<form action="" style="" method="post">
		<div class="form-group">
		<lable><b>userid</b></lable>
		<input type="text" class="form-control" name="userid" placeholder="enter user name"
		id="user">
	</div>
	<div class="form-group">
		<lable><b>password</b></lable>
		<input type="text" class="form-control" name="pass"  placeholder="enter password"
		id="pass">
		<p class="mt- text-primary"  style="float:right;">Forget password</p>
	</div>
	<div class="form-group">
		<input type="checkbox" name="checkbox">
		<span>stay me logins</span>
	</div>

<input type="submit" value="login" name="fsubmit" class="btn-block btn bg-info text-white">
	</form>
			
			</div>
</div>
<script>
 $(document).ready(function(){
	 
	 $(':submit').click(function(){
		 
		 var user = $('#user').val();
		 var pass = $('#pass').val();
		 
		 if((user=="")&&(pass==""))
			 {
				 alert('plz fill all filed');
				 return false;
				 
			 }
	 });
 });	
	
</script>	
	</body>
</html>