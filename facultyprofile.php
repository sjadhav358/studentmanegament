<?php 
 $conn = mysqli_connect('localhost','root',"","itcorner");
  if(isset($_POST['update']))
  {
	   $destination="";
	 $userid = $_GET['userid'];
	   $fname = $_POST['fname'] ;
	   $femail = $_POST['femail'] ;
	   $ffcultyid = $_POST['fid'];
	   $faddress = $_POST['faddress'];
	   $fmobile = $_POST['fmobile'];
	  $fsubject = $_POST['fsub'];
	 
	  $fdate  = $_POST['fdate'];
	// echo $fphoto = $_FILES['ffile'];
	$file = $_FILES['ffile'];
	
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
			echo "<script> alert('updated data successfully')</script> ";
		}
		else
		{
			echo " file not uploaded succfully";
		}
		
	}




      $insert = " UPDATE `faculty` SET `name`='$fname',`email`='$femail',`faculty_id`='$ffcultyid',`address`='$faddress',`mobile`=$fmobile,`subject`='$fsubject',`birth`='$fdate',`profile`= ' $destination'
	   WHERE faculty_id = $userid";

	  $res = mysqli_query($conn,$insert) or die("query unsuccesfull". mysqli_error($conn));
	   if($res)
	   {
		
		 echo " <script>alert('updated data successfully')</script> ";
	
	   }
	   else
	   {
		echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
		<strong>data not  inserted successfully !</strong> 
	</div>';
	   }


	  

  }
  
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
		col-md-2.box2 {
    margin-left: -541px;
}
		

.fileupload{
    border: 1px solid black;
    height: 200px;
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
 	<a href="index.html" class="navbar-brand">Home</a>
 	
 </nav>
 <div class="row">
		<div class="col-sm-2 bg-dark  titlegroup">
				<div class=" nav  flex-column" id="navbar">
					<a href="#student" class="nav-link " data-toggle="pill" role="button">faculty profile</a>
					<a href="#faculty" class="nav-link  " data-toggle="pill" role="button">timetable</a>
					
					
				</div>
			</div>
		
			
		<div class="col-lg-10 col-sm col-md-"><!-- column start-->
			
		<div class="tab-content p-2" id="one"><!--tab content--start-->
		   
		   <!--student-->
 		    <div class="tab-pane active show fade" id="student"><!--student tab-pane started-->
 		    
 		    
  		    <div class=" heading pt-1 pl-2 text-white font-wight-bold" style="background-color:#f16767;"><h4>faculty Detail</h4></div>
  		    <div class="row mt-5">
  		       <h3 id="message"></h3>
  		    	<div class="col-lg-3">
	

  		    		<div class="student-form">
  		    	
  		    		<form action="#" method="post" enctype="multipart/form-data">
								<?php
								 $conn = mysqli_connect('localhost','root',"","itcorner");
								
									if(isset($_GET['userid']))
									{
										$userid = $_GET['userid'];
										$sql="select * from faculty where faculty_id = '$userid'";
										$result = mysqli_query($conn,$sql);
										 while($row1 = mysqli_fetch_array($result))
										 {
											
								?>
  		    			<div class="form-group">
  		    		   <label><b>faculty name</b></label>
  		    		   <input type="text" class="form-control" name="fname"
  		    		   value="<?php echo $row1['name'];?>" required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>Email id</b></label>
  		    		   <input type="text" class="form-control" name="femail"  value="<?php echo $row1['email'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>user_id</b></label>
  		    		   <input type="text" class="form-control" name="fid" 
  		    		   value="<?php echo $row1['faculty_id'];?>"required>		
  		    			</div>
  		    		
  		    		</div>
  		    	</div>
  		    	
  		    		<div class="col-lg-3">
  		    		<div class="form-group">
  		    		   <label><b>Address location</b></label>
  		    		   <input type="text" class="form-control" name="faddress"
  		    		   value="<?php echo $row1['address'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>mobile number</b></label>
  		    		   <input type="text" class="form-control" name="fmobile" id="mobilenumber"
  		    		   value="<?php echo $row1['mobile'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>subject</b></label>
  		    		   <input type="text" class="form-control" name="fsub"
  		    		   value="<?php echo $row1['subject'];?>"required>		
  		    			</div>
  		    			
 
  		    	</div>
  		    	
  		    		<div class="col-lg-3">
  		    		<div class="form-group">
  		    		   <label><b>Data of birth</b></label>
  		    		   <input type="date" class="form-control" name="fdate"
  		    		   value="<?php echo $row1['birth'];?>"required>		
  		    			</div>
  		    			
  		    			
  		    			<div class="form-group">
  		    		   <label><b>upload photo</b></label>
  		    		   <input type="file" name="ffile">
  		    		   <div>
  		    		   	<?php
									 $conn = mysqli_connect('localhost','root',"",'itcorner');
						     $userid = $_GET['userid'];
									 $sql = " select profile from faculty where faculty_id = '$userid' ";
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
         	<button type="submit" name="update" class="btn btn-primary mt-2 ml-5">update</button>
  		    		</form>
  		    		<?php
										 }
									}
								?>
  		  
  		 
									
			</div><!--student tab-pane end--> 
		   
	<!--faculty-->
	
	  <div class="tab-pane " id="faculty"><!--student tab-pane started-->
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
  		    <h4 class="text-center text-danger">upload time table</h4>
  		    <div class="row time-table mt-5">

  		    <div class="col-md-2">
  		    	<form action="#" method="post" enctype="multipart/form-data">
  		    		
  		    		<label>select class</label>
  		    	<select class="form-control" name="class">
  		    		<option>MCA</option>
  		    		<option>B.COM</option>
  		    		<option>BSC</option>
  		    	</select>
  		    	
  		    </div>
  		    <div class="col-md-2 box2">
  		    <label>select divison</label>
  		    	<select class="form-control" name="division">
  		    		<option>A</option>
  		    		<option>B</option>
  		    		<option>C</option>
  		    	</select>
  		    </div>
  		    </div>
  		    
  		    <div class="fileupload  d-flex justify-content-center mt-5"
  		    style="border:1px solid black; height:200px;">
  		    <div class="file mt-5">
  		    <label>upload  file</label>
  		    	<input type="file" name="file">
  		    	<br>
  		    	<input type="submit" value="upload" class="mt-4 btn-primary btn" name="submit">
  		    </div>
  		    
  		    </div>
  		    
  		    </form>
			</div> <!--faculty end-->
	
	
	<!--question-->
	<div class="tab-pane" id="question">
		   
	 <h4 class="text-center text-danger">vedio upload </h4>

  		    <div class="row time-table mt-5">
  		    <div class="col-md-2">
  		    	<form action="vediofile.php" method="post" enctype="multipart/form-data">
  		    		
  		    		<label>select class</label>
  		    	<select class="form-control" name="class">
  		    		<option>M.COM</option>
  		    		<option>B.COM</option>
  		    		<option>BSC</option>
  		    	</select>
  		    	
  		    </div>
  		    <div class="col-md-2 box2">
  		    <label>select divison</label>
  		    	<select class="form-control" name="division">
  		    		<option>A</option>
  		    		<option>B</option>
  		    		<option>C</option>
  		    	</select>
  		    </div>
  		    
  		    <div class="col-md-2 box2">
  		    <label>title</label>
  		    <input type="text" class="form-control" placeholder="enter title" name="title">
  		    </div>
  <div class="col-md-2 box2">
  		   <label>description</label>
  		    <input type="text" class="form-control" placeholder="enter description" name="description">
  		    </div>

  		    </div>
  		    
  		    <div class="fileupload  d-flex justify-content-center mt-5"
  		    style="border:1px solid black; height:200px;">
  		    <div class="file mt-5">
  		    <label>upload  file</label>
  		    	<input type="file" name="file">
  		    	<br>
  		    	<input type="submit" value="upload" class="mt-4 btn-primary btn" name="submit">
  		    </div>
  		    
  		    </div>
  		    
  		    </form>
  		   <!--tab pane-- question-->
  		   
  		   
		
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