
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
		.userid ,.facultyid
		{
			color: red;
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
		<div class="col-sm-2 bg-dark titlegroup">
				<div class=" nav  flex-column" id="navbar">
					<a href="#student" class="nav-link " data-toggle="pill" role="button">Student</a>
					<a href="#faculty" class="nav-link  " data-toggle="pill" role="button">Faculty</a>
					
				</div>
			</div>
	
			
		<div class="col-lg-10 col-sm col-md-"><!-- column start-->
			
		<div class="tab-content p-2" id="one"><!--tab content--start-->
		   
		   <!--student-->
			 <div class="tab-pane active show fade" id="student"><!--student tab-pane started-->
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
 if($result)
 {
	 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			 <span aria-hidden="true">&times;</span>
			 <span class="sr-only">Close</span>
		 </button>
		 <strong>Data inserted successfully </strong> 
	 </div>';
 }
 else
 {
	 
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>
	<strong>plz enter other user_id </strong> 
</div>';
 }
}




?>
	<div class="studentform">
			 <?php
				$conn = mysqli_connect('localhost','root',"",'itcorner');
				
				$sql = "select  user_id from student ";
				$res = mysqli_query($conn,$sql);
				
				  if(mysqli_num_rows($res)>0)
				  {
					  while($row = mysqli_fetch_array($res))
					  {
						  $user = $row['user_id'];
					  }
				  }
			 ?>

		       <form action="" method="POST">
						
			   
			       	<div><h3>Student Record</h3></div>
		       
		       	<div class="form-group inline-div">
		       		<label>Name</label>
		       		<input type="text" class="form-control" name="name" 
		       		placeholder="Enter name" id="name"  required>
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>Email</label>
		       		<input type="email" class="form-control" name="email" id="email"
		       			placeholder="Enter Email" id="email"  required>
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>user_id</label>
		       		<input type="text" class="form-control userid" name="userid" id="usid"
		       			placeholder="" value="<?php echo $user." " ." exit user_id "; ?>"  required >
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>password</label>
		       		<input type="text" class="form-control" name="password" id="pass"
		       		placeholder="Enter Password"  required>
		       	</div>
		       	<br>
		       	<br>
		       	<input id="s_submit" type="submit" class="btn btn-success ml-5" value="save" name="submit"/>
		       	<input type="Reset" class="btn btn-danger ml-5" value="cancle" name="submit"/>
		   
		       </form>   
		      
	  

		       
	  			</div>
	  				
		       					
		       				
									
			</div><!--student tab-pane end--> 
		   
	<!--faculty-->
	
	  <div class="tab-pane " id="faculty"><!--student tab-pane started-->
			  
	  <?php
	   
	   if(isset($_POST['fsubmit']))
	   {
		   $conn = mysqli_connect("localhost","root","","itcorner");
	  
		$name = $_POST['fname'];
	   $email = $_POST['femail'];
	   $userid = $_POST['fuserid'];
		  $pass = $_POST['fpassword']; 
	  
		   
		   $q= " INSERT INTO `faculty`(`name`, `email`, `faculty_id`, `password`)
		   VALUES ('$name','$email','$userid','$pass')";
	  
	   $result = mysqli_query($conn,$q);
	   if($result)
	   {
		echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		<strong>Data inserted successfully </strong> 
	</div>';
		   
	   }
		   else
		   {
			   echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   <span aria-hidden="true">&times;</span>
				   <span class="sr-only">Close</span>
			   </button>
			   <strong>plz enter other faculty_id </strong> 
		   </div>';
		   }
		   //$sql = mysqli_query($conn,$sql);
		   
	   }
	   else
	   {
		   echo " ";
	   }
	   
	  ?>					 
						 
	  
  		    <div class="  studentform">
			  <?php
				$conn = mysqli_connect('localhost','root',"",'itcorner');
				
				$sql = "select  faculty_id from faculty ";
				$res = mysqli_query($conn,$sql);
				
				  if(mysqli_num_rows($res)>0)
				  {
					  while($row = mysqli_fetch_array($res))
					  {
						  $faculty = $row['faculty_id'];
					  }
				  }
			 ?>
		       <form action="" method="POST">
		        <div><h3>Faculty Record</h3></div>
		       	<div class="form-group inline-div">
		       		<label>Name</label>
		       		<input type="text" class="form-control" name="fname" id="name"
		       		placeholder="Enter name" required>
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>Email</label>
		       		<input type="email" class="form-control" name="femail" id="email"
		       			placeholder="Enter Email" required>
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>user_id</label>
		       		<input type="text" class="form-control facultyid" name="fuserid" id="usid"
		       			placeholder="Enter user_id" value="<?php echo $faculty." " .'exit faculty_id'?>"  required>
		       	</div>
		       	
		       	<div class="form-group inline-div">
		       		<label>password</label>
		       		<input type="text" class="form-control" name="fpassword" id="pass"
		       			placeholder="Enter password"  required>
		       	</div>
		       	<br>
		       	<br>
		       	<input id="f_submit" type="submit" class="btn btn-success ml-5" name="fsubmit"
		       	value="submit">
		       	<input type="reset" class="btn btn-danger ml-5" name="submit"
		       	value="cancel">
		       	
		       	
		       </form> 
  
	  			</div>
	
			</div> <!--faculty end-->
	
	
	<!--question-->
	<div class="tab-pane" id="question">
	<?php
   if(isset($_POST['qsubmit']))
	 
 {
 $conn = mysqli_connect('localhost','root',"",'itcorner');
	 $question =$_POST['question'];
   	$ans = $_POST['ans'];
	$keyword = $_POST['keyword'];
	 
	 if($question==""||$ans==""||$keyword=="")
	 {
		 echo "empyt";
	 }

	 else
	 {
		$q = " INSERT INTO `question`( `question`, `keyword`, `answers`) 
		VALUES ('$question','$keyword','$ans')";
		
		 

		//$sql= "insert into question keyword answers values('$question','$ans','$keyword')";
	   $result = mysqli_query($conn,$q);
	
if($result)
{
	echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>
	<strong>question inserted successfully </strong> 
</div>';
}
else
{
   echo " query failed";	
}
	 }
		 
 }
?>	
		<form action="" method="POST">
		
		<lable>category</lable>
		<select name=	"category" class="form-control-sm">
					<option value="">student</option>
					<option value="">faculty</option>
				</select>
				<br>
				<br>	
				
			<div class="form-group">
				<label>question</label>
				<textarea class="form-control" name="question" id="ques" required>
					
				</textarea>
				<br>
				
				<label>anwers</label>
				<textarea class="form-control" name="ans" id="ans" required>
					
				</textarea>
				<label>keyword</label>
				<textarea class="form-control" name="keyword" id="key" required>
					
				</textarea>
			</div>
			<input  id="q_submit" type="submit" name="qsubmit" value="submit" class=" btn btn-primary">
			
			
		</form>
		 <script>
					 $(document).ready(function(){
						 $('#q_submit').click(function(){
							 var name = $('#ques').val();
							 var ans =$('#ans').val();
							 var key = $('#key').val();
					
							 
							 
								if((name=="") && (key=="") && (key==""))
									{
										alert('plz fill all record');
										return  false;
									}
							 
						 });
							
						
					 });
					</script> 
		
	</div>
	  
	
	
	<!--questionend-->
	
	<!---strademo-->
	   <div class="tab-pane" id="question">
	
		<form action="question.php" method="POST">
		<lable>category</lable>
		<select name=	"category" class="form-control-sm">
					<option value="">student</option>
					<option value="">faculty</option>
				</select>
				<br>
				<br>	
				
			<div class="form-group">
				<label>question</label>
				<textarea class="form-control" name="question" placeholder="Enter your question">
					
				</textarea>
				<br>
				
				<label>anwers</label>
				<textarea class="form-control" name="ans">
					
				</textarea>
				<label>keyword</label>
				<textarea class="form-control" name="keyword" disabled>
					
				</textarea>
			</div>
			<input  type="submit" name="submit" value="submit">
			
			
		</form>
		
	</div>
	<div class="tab-pane" id="demo">
	
		<form action="match.php" method="POST">
		
		
		
				<br>
				<br>	
				
			<div class="form-group">
				<label>question</label>
				<textarea class="form-control" name="question">
					
				</textarea>
				<br>
				
				<label>anwers</label>
				<textarea class="form-control" name="ans" >
				<?php
					 if(isset($_GET['ans']))
					 {
						 echo $ans;
					 }
					 else
					 {
						 echo $ans ="";
					 }
					?>
				</textarea>
				</div>
			<input  type="submit" name="submit" value="submit"  class="btn btn-primary">
			<input  type="Reset" name="submit" value="cancle" class="ml-5 btn btn-danger">
			
			
		</form>
		
	</div>
	
	<!--end---->
		
			
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