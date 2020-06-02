
<!doctype html>
<html lang="en">
  <head>

    <title>time table</title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-group {
    margin-bottom: 1rem;
    display: inline-block;
    margin-top: 5%;
}
    </style>
  </head>
  <body>
    <nav class="navbar container-fluid navbar-brand  navbar-dark bg-info">
      <a href="admin.php " class="text-white">Home</a>
    </nav>
  <?php
if(isset($_GET['file']))
				{
					
					$file	=	$_GET['file'];
				}
			else
			{
				echo ' <div class="alert alert-primary w-25 alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h6>select class and devision</h6>
                </div>';
			}
				?>
  <div class="row ml-5" style="m">
    <?php
     $conn = mysqli_connect('localhost','root',"",'itcorner');
     if(isset($_POST['submit']))
     {
     $class = $_POST['class'];
     
     $divi = $_POST['divi'];
     
     
     $q= " SELECT * from `utimetable` where class='$class' AND division ='$divi'";
     $result = mysqli_query($conn,$q);
      if(mysqli_num_rows($result))
      {
          while($row= mysqli_fetch_array($result))
          {
              $time = $row['timetable'];
     
          }
          header('location:timetable.php?file='.$time);
          echo $time;
      }
     else
     {
      
     }
      
     
     }
     

    ?>
        
  
  		    <form action="#" method="POST" style="width: 100%;">
  		    		<label>select class</label>
  		    		<div class="form-group  col-md-4" >
  		    			<select class="form-control" name="class">
  		    				<option>select</option>
  		    				<option>MCA</option>
  		    				<option>B.COM</option>
  		    				<option>BSC</option>
  		    			</select>
  		    		</div>
  		    		<div class="form-group col-md-4 ">
  		    			<select class="form-control" name="divi">
  		    			<label>division</label>
  		    		
  		    			<option>division</option>
  		    				<option>A</option>
  		    				<option>B</option>
  		    				<option>C</option>
  		    			</select>
  		    		</div>
  		    		<input type="submit" name="submit">
  		    	</form>
  		    	<a	href="<?php	echo	$file;?>">download</a>
  		    	
  		    </div>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
