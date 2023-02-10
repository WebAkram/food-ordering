<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link href="css/navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="css/body-contant1.css"> -->
<!-- <link rel="stylesheet" href="css/container_contant.css"> -->
  <link rel="stylesheet" href="css/footer.css">
  <!-- <link rel="stylesheet" href="css/product.css"> -->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>HM Products</title>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body >
  

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="index.php">HM Products</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
         

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Glases.php" target="Glases.php">Glases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="shirts.php"  target="shirts.php">T-Shirts</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="jkets and pents for Man & women.php"  target="jkets and pents for Man & women.php">Jakets and Pents</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Man's Products.php"  target="Man's products.php">Man's Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Children's Products.php" target="Children's Products.php">Child Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ladyes.php" target="ladyes.php">Lady's Products</a>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
        <button type="button" class="Search-btn">Search</button>
        <a href="php/login_form.php"> <button type="button" class="Log-in-btn" target="php/login_form.php">Log-In </button></a>
      </div>
      <a href="php/register_form.php"> <button type="button" class="Sign-Up-btn" target="php/register_form.php">Sign UP </button></a>
      </div>
    </div>
 </nav>
<!--<h2 class="dark m-lg-5">HOME PAGE</h2> -->
<div class="container">
<div class="row">
<?php 
require 'connection.php';
    // (1) set the limit Ascending first 3 row 
    // (2) if you need last 3 row change the value ASC to DESC 

    $sql = mysqli_query($con, "SELECT * FROM product ORDER BY id ASC LIMIT 3 " );

 foreach ($sql as $row){
?>

<div style="max-width:fit-content;" class="col-sm  mx-auto mt-4"> 

<div style="background-color:springgreen; border-radius:15px ; "   class="card ">
 <img src="<?=  $row['image']; ?>  "  height="300" width="300px" style="border-radius:15px ;"  >
  </div>
     
  </div>   
<?php } ?>

</div>
</div>


</body>
</html>