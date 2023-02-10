<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="nav.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body  style="background-image:url(akram.jpg) ;">
<nav style="z-index:1;" class="navbar shadow navbar-expand-lg  navbar-light  fixed-top">
        <div class="container-fluid"> 
               
            <a href="index.php"   style="font-size: 33px; cursor:pointer; "  class="navbar-brand ms-4 px-4   ">
            
          
            <img src="akram.png" height="70"  alt=""></a>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5 ">
                    <li class="nav-item ">
                        <a class="nav-link  home mx-4    " aria-current="page" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  home mx-4  " aria-current="page" href="dashboard.php">Products</a>
                    </li>
                    <li class="nav-item home ">
                        <a class="nav-link  home mx-4  " aria-current="page" href="order.php">Orders</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  home mx-4  " aria-current="page" href="#">Delivery Team</a>
                    </li>
                </ul>
                <!-- hover drop down start  -->
                <div  class="dropdown">
                  
   <img src="pp.jpg"  class="dropbtn img-thumbnail rounded-circle" alt="">
  <!-- <h4 class="bg-light text-dark " style="position:absolute; top:84px; border-radius:5px; right:-15px;  height:30px; width:125px; ">&nbsp;Ch Akram </h4> -->
  <div class="dropdown-content ">
    <a  href="#"><i  class="fa fa-check-square-o oi  " aria-hidden="true"></i>&nbsp;&nbsp;Profile</a>
    <a href="dashboard.php"><i  class="fa fa-shopping-basket op " aria-hidden="true"></i>&nbsp;&nbsp;Product</a>
    <a  href="order.php"><i style="font-size:30px;"  class="fa fa-cart-plus text-warning " aria-hidden="true"></i>&nbsp;&nbsp; Orders</a>
    <a href="logout.php"><i  class="fa fa-power-off ok " aria-hidden="true"></i>&nbsp;&nbsp; Logout</a>
  </div>
</div>
<!-- drop down end -->
            </div>
        </div>
    </nav>
    <!-- navbar section ends -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>