
<?php
include_once 'connection.php';
session_start();

if (isset($_POST['btn'])){
    
  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $phone = $_POST['phone'];
		$pmode = $_POST['pmode'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  
		$data = '';
	

       $sm	=	$con->prepare("INSERT INTO `orders` (`name`,`email`,`phone`,`address`,`pmode`,`products`,`amount_paid`)VALUES(?,?,?,?,?,?,?)");
		
		$sm->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$products,$grand_total);
	     
		$sm->execute();

		mysqli_query($con, "DELETE FROM `cart`");
	
         
			$data .='<div class="text-center width alert-secondary bg-light alert card mx-auto  w-50  mt-5">
	
		<h1  style="font-family:fantasy;" class="display-4 mt-2 text-danger">Thank You!</h1>
		<h2 style="font-family:cursive;" class="text-primary">Your Order Placed Successfully!</h2>
		   <div class="row col-md-6 mx-auto ">
		<h4 class="bg-light shadow alert text-dark card 18rems mx-auto text-light rounded p-2">' . $products . '</h4>
</div>
		<h4 style="font-style:italic; font-weight:600;">Your Name : ' . $name . '</h4>
		<h4 style="font-style:italic; font-weight:600;">Your E-mail : ' . $email . '</h4>
		<h4 style="font-style:italic; font-weight:600;">Your Phone : ' . $phone . '</h4>
		<h3 style="font-weight:bold; width:fit-content; font-size:18px; font-weight:600;" class="alert btn-success  mx-auto">Total Amount Paid : $'.number_format($grand_total,2).'</h3>
		<h4 class"pmode" style="font-style:italic; font-weight:600;">Payment Mode : ' . $pmode . '</h4>
		
		<a href="index.php">
		<input type="button" style=" font-size:16px; position:absolute ; left:4px; bottom:10px;  font-family:sans-serif; font-weight:600;" class="btn shadow  alert-dark  btn-outline-dark" value="Continue Shopping"></a>
		</div>';

echo $data;
};
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	</head>
	

	<style>

		@media screen  and (max-width:550px){
			.width{
                   width: 400px !important;
				   height:500px;
		
			}
		}
	</style>
	<body style="background-color:pink;" >
	</body>
	</html>


