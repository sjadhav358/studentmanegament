<?php
$file = "";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script>
      $(document).ready(function(){
       
	    var mobile = $('#mobilenumber').keyup(function(){
           mobile = $(this).val();
		     if(isNaN(mobile))
			 {
				 alert('enter only number');
			 }
			 
			  if(mobile.length>10)
			  {
				  alert('mobile number not grather than 10');
			  }
		});
	


	  });
	</script>
	<style>
		.inline-div
		{
		 display: inline-block;
		  padding: 10px;
		}	
		.studentform
		{
			width: 520px;
			
		}	
		
		.row {
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: space-around;
}
	.heading {
    margin-left: -23px;
    margin-top: -8px;
    height: 41px;
    width: 106%;
}
		.form-group{
    display: inline-block;
    margin-left: 27px;
}
		@media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
			.titlegroup
			{
				display: none;
			}
}
	</style>
</head>
<body>
<!--creating navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-info">
 	<a href="index.html" class="navbar-brand">home</a>
 	
 </nav>
 <div class="row">
		<div class="col-sm-2  bg-dark titlegroup">
				<div class=" nav  flex-column" id="navbar">
					<a href="#student" class="nav-link " data-toggle="pill" role="button">student profile</a>
					<a href="timetable.php" class="nav-link  ">timetable</a>
					<!--<a href="#question" class="nav-link  " data-toggle="pill" role="button">lecture</a>!-->
				</div>
			</div>
	
			
		<div class="col-lg-10 col-sm col-md-"><!-- column start-->
			
		<div class="tab-content p-2" id="one"><!--tab content--start-->
		   
		   <!--student-->
 		    <div class="tab-pane active show fade" id="student"><!--student tab-pane started-->
			 <?php
			  
				 $conn = mysqli_connect('localhost','root',"",'itcorner');
				       $userid="";
					 $userid = $_GET['userid'];
					$sql = "select * from student where user_id = '$userid'";
							$res = mysqli_query($conn,$sql);
					 while($row1 = mysqli_fetch_array($res))
					 {
					
				?>
 		    
			  <div class=" heading pt-1 pl-2 text-white font-wight-bold" style="background-color:#f16767;"><h4>student Detail</h4></div>
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

	 if(isset($_POST['update']))
	 {
		 $destination='';
	 $name=$_POST['sname'];
	  $email =$_POST['semail'];
	  $address =$_POST['saddress'];
	 $userid =$_POST['suserid'];
	  $mobile =$_POST['smobile'];
	  $branch =$_POST['sbranch'];
	  $date =$_POST['sdate'];
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
			 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 <span class="sr-only">Close</span>
				 </button>
				 <strong> file upload succesfully</strong> 
			 </div>';;
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


	 }
  


?>

  		    <div class="row mt-5">
  		    
  		    	<div class="col-lg-3">
  		    		<div class="student-form">
  		    		
  		    		<form action="#" method="post" enctype="multipart/form-data">
  		    		
  		    			<div class="form-group">
  		    		   <label><b>Student name</b></label>
  		    		   <input type="text" class="form-control" name="sname"
  		    		   value="<?php echo $row1['name'];?>" required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>Email id</b></label>
  		    		   <input type="text" class="form-control" name="semail"  value="<?php echo $row1['email'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>user_id</b></label>
  		    		   <input type="text" class="form-control" name="suserid" 
  		    		   value="<?php echo $row1['user_id'];?>"required>		
  		    			</div>
  		    		
  		    		</div>
  		    	</div>
  		    	
  		    		<div class="col-lg-3">
  		    		<div class="form-group">
  		    		   <label><b>Address location</b></label>
  		    		   <input type="text" class="form-control" name="saddress"
  		    		   value="<?php echo $row1['address'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>mobile number</b></label>
  		    		   <input type="text" class="form-control" name="smobile" id="mobilenumber"
  		    		   value="<?php echo $row1['contact_no'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>branch</b></label>
  		    		   <input type="text" class="form-control" name="sbranch"
  		    		   value="<?php echo $row1['branch'];?>"required>		
  		    			</div>
  		    			
 
  		    	</div>
  		    	
  		    		<div class="col-lg-3">
  		    		<div class="form-group">
  		    		   <label><b>Data of birth</b></label>
  		    		   <input type="date" class="form-control" name="sdate"
  		    		   value="<?php echo $row1['date'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>upload photo</b></label>
  		    		   <input type="file" name="sfile">
  		    		   <div>
  		    		   	<?php
									 $conn = mysqli_connect('localhost','root',"",'itcorner');
						     $userid = $_GET['userid'];
									 $sql = " select profile from student where user_id = '$userid' ";
									 $result = mysqli_query($conn,$sql);
									  if(mysqli_num_rows($result))
										{
											while($row= mysqli_fetch_array($result))
											{
									 ?>
									  <img src="<?php echo $row['profile'] ?>" width="50px">
									 <?php
											}
										}
									?>
							   	
  		    		   </div>
  		    			</div>
  		    			
  		    			
  		    		
  		    			
 						
  		    	</div>
  		    	
  		    </div> 				
         	<button type="submit" name="update"  class="btn btn-primary mt-2 ml-5">update</button>
  		    		</form>
  		  
  		    <?php
					 }
							 
						 
				?>
									
			</div><!--student tab-pane end--> 
		   
	<!--faculty-->
	
	  <div class="tab-pane " id="faculty"><!--student tab-pane started-->
 		    <?php
			    
			  if(isset($_GET['file']))
				{
					
					$file	=	$_GET['file'];
				}
			else
			{
				echo "<div class ='alert alert-warning'> plz select class and division the filed </div>";
			}
				?>
  		    <h2>time table</h2>
  		    <div>
  		    	<form action="timebackend.php" method="POST">
  		    		<label>select class</label>
  		    		<div class="form-group inline" >
  		    			<select class="form-control" name="class">
  		    				<option>select</option>
  		    				<option>MCA</option>
  		    				<option>B.COM</option>
  		    				<option>BSC</option>
  		    			</select>
  		    		</div>
  		    		<div class="form-group inline">
  		    			<select class="form-control" name="divi">
  		    			<label>division</label>
  		    		
  		    			<option>division</option>
  		    				<option>A</option>
  		    				<option>B</option>
  		    				<option>C</option>
  		    			</select>
  		    		</div>
  		    		<input type="submit">
  		    	</form>
  		    	<a style="display:;"	href="<?php	echo	$file;?>">download</a>
  		    	
  		    </div>
			</div> <!--faculty end-->
	
	
	<!--question-->
	<div class="tab-pane" id="question">
	  
	 <div class="vedio">
	 	<form  action="vediobackend.php"  method="post">
	 	<div class="form-group">
			<label>select class</label>
			<select name="class" class="form-control">
				<option>M.COM</option>
				<option>B.COM</option>
				<option>BSC</option>
			</select>
			</div>
			<div class="form-group">
				<label>select division</label>
			<select name="divi" class="form-control">
				<option>A</option>
				<option>B</option>
				<option>C</option>
			</select>
			</div>
			<input type="submit" class="btn btn-sm btn-primary" value="submit">
	 	</form>
	 	
	 </div>
	  <?php
			    $vedio	=	$_GET['vedio'];
		   $conn = mysqli_connect('localhost','root',"",'itcorner');
		    
		  $sql = "select * from vedio where vediolecture ='$vedio'";
		 $result = mysqli_query($conn,$sql);
		   while($row = mysqli_fetch_array($result))
			 {
				 
				?>
	<div class="row card-display">
	
		<div class="card" style="width: 18rem;">
     <embed src="<?php echo $vedio; ?>">
  <div class="card-body">
    <h5 class="card-title"><b>Card</b> title : <?php echo $row['title'];  ?></h5>
		<p class="card-title"><b>Description</b> : <?php echo $row['description'];  ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

		<?php
			 }
		?>
		
		
	</div>
		
	</div>
	  
	
	
	<!--questionend-->
		
			
	</div><!--tab-content end -->
	
	 </div> <!--column end here-->
	</div> <!--end row-->
</body>
<script>
 
	$(document).ready(function(){
		 
			$('#submit').click(function()
			{
				
		  var name = $('#name_id').val();
			var email= $('#email_id').val();
			var userid =$('#user_id').val();
			var pass =$('#pass_id').val();
			 	alert(name);
				
			});
		
		
		
			});
	
	
</script>
</html>