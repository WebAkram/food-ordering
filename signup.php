<?php
 include 'connection.php';
 session_start();
if (isset($_POST['button'])) {

	$u_name = $_POST['u_name'];
	$u_email = $_POST['u_email'];
	$u_pass = $_POST['u_pass'];
	$u_cpass = $_POST['u_cpass'];
	$file = $_FILES['u_file'];

	$birth = $_POST['u_birth'];



	$file_size = ($file['size'] / 1024) / 1024;

	$ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
	$path = "./signup/adminpic/" . time() . "." . $ext;

	move_uploaded_file($file['tmp_name'], $path);

$e=	$con->query("insert INTO `adminsignup` ( `username`, `email`,`password`,`confirmpassword`,`databirth`,`image`) VALUES
('$u_name', '$u_email','$u_pass','$u_cpass','$birth','$path')");
?>
<script>
 alert('signup successfully');
 window.location.href='login.php';

</script>
<?php
}
?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v3 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="sign.css/style.css">
		<link rel="stylesheet" href="sign.css/style.scss">	
		<link rel="stylesheet" href="sign.css/style.css.map">	
	</head>

	<body>

		<div class="wrapper" style="background-image: url('./signup/images/bg-registration-form-3.jpg');">
			<div class="inner">
				
				<form action="" enctype="multipart/form-data" method="post">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Username:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-account-o"></i>
								<input type="text" class="form-control" required name="u_name">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Email:</label>
							<div class="form-holder">
								<i style="font-style: normal; font-size: 15px;">@</i>
								<input type="email" class="form-control" required name="u_email">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Password:</label>
							<div class="form-holder">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" required name="u_pass" placeholder="********">
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Confirm Password:</label>
							<div class="form-holder ">
								<i class="zmdi zmdi-lock-outline"></i>
								<input type="password" class="form-control" required name="u_cpass" placeholder="********">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">Image:</label>
							<div class="form-holder  ">
							<i  class="fas fa-image"></i>
						<input type="file" class="form-control  pt-2 " required name="u_file">
					
							</div>
						</div>
						<div class="form-wrapper">
							<label for="">Data of Birth:</label>
							<div class="form-holder ">
								<input type="date" name="u_birth" required class="form-control" id="">
								<i class="zmdi zmdi-face"></i>
							</div>
						</div>
					</div>
					<div class="form-end">
						<!-- <div class="checkbox">
							<label>
								<input type="checkbox"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
								<span class="checkmark"></span>
							</label> -->
						<!-- </div> -->
						<a  class="   text-dark p-1 ms-5" style=" background-color:palegreen; border:2px solid springgreen ; text-decoration:none; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif; font-weight:550;" href="login.php">I have already account</a>
						<div class="button-holder">
							<button class="" name="button" >Register</button>
						</div>
						
					</div>
					
						
					
				</form>
				
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>