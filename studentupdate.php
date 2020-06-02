
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
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
	
	</style>
</head>
<body>
<!--creating navbar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-info">
 	<a href="#" class="navbar-brand">Admin</a>
 	
 </nav>
 <div class="row">
		<div class="col-sm-2 bg-dark">
				<div class=" nav  flex-column" id="navbar">
					<a href="#student" class="nav-link " data-toggle="pill" role="button">Student</a>
					<a href="#faculty" class="nav-link  " data-toggle="pill" role="button">Faculty</a>
					<a href="#question" class="nav-link  " data-toggle="pill" role="button">question bank</a>
				</div>
			</div>
	
			
		<div class="col-lg-10 col-sm col-md-"><!-- column start-->
			
		<div class="tab-content p-2" id="one"><!--tab content--start-->
		   
		   <!--student-->
 		    <div class="tab-pane active show fade" id="student"><!--student tab-pane started-->
  		    
  		    <div class="  studentform">
		       <form action="update-backend.php" method="POST">
		         
					 <?php
						 $conn = mysqli_connect('localhost','root',"",'itcorner');
						 $userid = $_GET['id'];
						 		$q = " select * from student where userid ='$userid'";
					$result = mysqli_query($conn,$q);
		
			while($row = mysqli_fetch_array($result))
			{
			?>
		       
		       	<div class="form-group inline-div">
		       	   <input type="text" name="id" value="<?php echo $userid ;?>">
		       		<label>Name</label>
		       		<input type="text" class="form-control" name="uname" id="user_id"
		       		value="<?php echo $row[0]; ?>">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>Email</label>
		       		<input type="email" class="form-control" name="uemail" id="email_id"
		       		value="<?php echo $row[1]; ?>">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>user_id</label>
		       		<input type="text" class="form-control" name="uuserid" id="user_id"
		       		value="<?php echo $row[2]; ?>">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>password</label>
		       		<input type="text" class="form-control" name="upassword" id="password_id"
		       			value="<?php echo $row[2]; ?>">
		       	</div>
		       	<br>
		       	<br>
		       	
		       	<input type="submit" value="update" name="submit">
		   <!--
		      	<a href="studentupdate.php" class="btn btn-primary">update</a>
		     !-->
		        
		       </form>   
		        <?php
			}
				?>
		       

		       
	  			</div>
	  				
		       					
		       				
									
			</div><!--student tab-pane end--> 
		   
	<!--faculty-->
	
	  <div class="tab-pane" id="faculty"><!--student tab-pane started-->
  		    
  		    <div class="  studentform">
		       <form action="facultybackend.php" method="POST">
		       
		       	<div class="form-group inline-div">
		       		<label>Name</label>
		       		<input type="text" class="form-control" name="fname" id="user_id">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>Email</label>
		       		<input type="email" class="form-control" name="femail" id="email_id">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>user_id</label>
		       		<input type="text" class="form-control" name="fuserid" id="user_id">
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>password</label>
		       		<input type="text" class="form-control" name="fpassword" id="password_id">
		       	</div>
		       	<br>
		       	<br>
		       	<input type="submit" class="btn btn-success ml-5" name="submit"
		       	value="submit">
		       	
		       </form>   
	  			</div>
	
			</div> <!--faculty end-->
	
	
	<!--question-->
	<div class="tab-pane" id="question">
	
		<form action="question.php" method="POST">
			<div class="form-group">
				<label>question</label>
				<select name="question" class="form-control-sm">
					<option value="gfdf">student</option>
					<option value="fv">faculty</option>
				</select>
				
				<textarea class="form-control" name="text">
					
				</textarea>
				
			</div>
			<input  type="submit" name="submit" value="submit">
			
			
		</form>
		
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
</html>>