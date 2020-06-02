<?php
  if(isset($_POST['submit']))
	{
		require 'mailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail-> host='smpt.gmail.com'

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contactformphp</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="js/jquery-.js"></script>
	  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4 mt-5 bg-light rounded">
				<h1 class="text-center font-weight-bold text-primary">contact us</h1>
				<hr class="bg-light">
				<h5 class="text-center text-success"></h5>
				<form action="" method="post" id="form-box" class="p-2">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="enter your name">
					</div>
					
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="enter your email">
					</div>
					
					<div class="form-group">
						<textarea name="msg" id="msg" class="form-control" placeholder="write your msg"
						cols ="30" rows="4" required>
							
						</textarea>
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>