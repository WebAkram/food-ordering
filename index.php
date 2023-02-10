<?php 
include_once 'connection.php';
session_start();
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name = '$product_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $message[] = ' ⚠ Product already added to cart!';
     }else{
        $insert_product = mysqli_query($con, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = '☑️ Product added to cart succesfully!';
     }
}
if(isset($_POST['update_update_btn'])){
  $update_value = $_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">

    
    <link rel="stylesheet" href="ftr.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body  id="home" class="good" >
    <!-- Navbar start -->
    <nav   class="navbar navbar-expand-lg navbar-light   fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-4 px-4    " href="#"> <img src="logo.png" class="image mt-1"  style="height: 65px;" alt=""  > </a>
            <button class=" navbar-toggler text-info mb-2 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span  class="open" > <i style=" padding:0%; font-size: 28px !important;" class="fas fa-bars"></i></span>
                <span class="close" > <i style=" padding:0%; font-size: 28px !important;" class="fas fa-times"></i></span>

            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
               
            <ul    class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li  class="nav-item  ">
                        <a class="nav-link  home mx-4 active " aria-current="page" href="#home">Home</a>
                    </li>
                    <li  class="nav-item ">
                        <a class="nav-link  home mx-4 " aria-current="page" href="#menu">Menu</a>
                    </li>
                    <li  class="nav-item  ">
                        <a class="nav-link  home mx-4 " aria-current="page" href="#benefit">Benefits</a>
                    </li>
                    <li  class="nav-item ">
                        <a class="nav-link  home mx-4 " aria-current="page" href="#footer">Contact us</a>
                    </li>
                  
</ul>
                <form class="d-flex search">
                    <input class="form-control me-2" type="search" style="      font-family:fantasy; font-style:italic; "  placeholder="Search" aria-label="Search">
                    <button style="margin-right:50px ;      font-weight:500;       font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;" class="btn alert-success sea" type="submit">Search</button>
                </form>
            </div>
            <?php
      $select_rows = mysqli_query($con, "SELECT * FROM `cart`");
      $row_count = mysqli_num_rows($select_rows);
      ?>
           <button  type="button" class=" cc  me-5"  style="  font-size:25px; height: 50px; width:55px;  border-radius:50%; " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
           <i style="margin-top:2.1vh ;" class="fas fa-cart-shopping cart"></i>
          <span style="font-size:12.4px; font-family:cursive; font-weight:600;  position:relative; bottom:66px;" class=" bg-light  rounded-pill badge  ms-4"><?php echo $row_count; ?></span>
            </button>
            </div> 
    </nav>
    <?php
if(isset($message)){
   foreach($message as $message){
    // echo '<div style="  position:absolute; top:80px; right:10px; font-size:23px; font-family:italic; font-weight:500; border-radius:3px; z-index:1;" class="message text-danger shadow text-center  w-25  bg-light"> <span>'.$message.'</span> <button type="button" style="font-size:15px;" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
   echo ' <div style=" z-index:1;  position:fixed; top:66px; height:10px; font-size:20px;  font-family:cursive;   border-radius:3px; right:10px; height:10px; "  class="alert message  text-danger bg-light alert-dismissible fade shadow show" role="alert">
   <span style="position:relative; top:-15px;">'.$message.'</span>
    <button type="button" style="font-size:13px; position:absolute; top:-10px;  "  class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}};
?> 
    <!-- navbar section ends -->
    <!-- toggle right -->
    <div  class="offcanvas offcanvas-end fg "  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header ">
    <h3 class="mt-2  " style="font-family:Georgia, 'Times New Roman', Times, serif; color:dodgerblue; font-style:italic; font-weight:600;" id="offcanvasRightLabel">Shopping Cart :</h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body wrapper  ">
    <table  style="position:relative; top:-15px; " class="table   text-dark" role="alert">
        <thead>
    <tr class="bg-info text-light"  style="font-family:monospace; font-size:20px;   ">
       <th ></th>
      <th   scope="col">Price</th> 
       <th   scope="col">Quantity</th>
       <th >Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $selectquery = "SELECT * FROM `cart`";
    $grand_total = 0;
    $query = mysqli_query($con,$selectquery);
    if ($query->num_rows > 0) {
        while ($row=$query->fetch_assoc()) {
    // foreach($query as $row){
      ?>
  <tr  style="font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif;  font-weight:800; "  >
   
  <td style="float:left; font-size:15px;  " class="align-middle text-center  kf  ">  <img src="<?php echo $row['image'];  ?> " style=" height:76.6px;   " class="img-box  rounded  " >
  
 <?php   echo  ($row['name']);   ?>
 </td>
                                            
<td  class="align-middle " style=" font-family:cursive; " >RS.<?php echo $row['price']?><span style="position:absolute; left:178px;">X</span></td>

<td>
<form action="" method="post">
<input type="hidden" name="update_quantity_id"  value="<?php echo $row['id']; ?>" >
<input type="number"  class="form-control" name="update_quantity" style="width:62px; margin-top:25px; font-size:large; font-weight:600; font-family:cursive;  margin-left:20px;" value="<?= $row['quantity'] ?>">
<input type="submit" class="option  btn-outline-dark" value="update" name="update_update_btn">
</form>
  </td>
  
<td class="align-middle" >
<a href="delete.php?remove=<?php echo $row['id']?>" class="btn  deleteuser "><i class="fa fa-trash-o fa-lg"></i></a>
</td>
  </tr>

  <input type="hidden" <?php    echo 
   
   $sub_total = ($row['price'] * $row['quantity']); ?> name="">
  <?php
 

    
 $grand_total += $sub_total; 
          
        }
    }
    else{
         
        echo '
        <img src="load.GIF" alt="" width="350px;"  class="empty" >
      <p class=" emp" style="font-size:15px;">Your Cart Is Empty</p>';
     }
        ?>
        
<!-- 
        <span style="position:absolute; top:175px; left:200px; font-size:17px;" ></span> -->
  </tbody>
</table>
</div>
<div  style=" border:2.3px solid; font-size:20px; font-style:italic; font-weight:750; border-radius: 30px;" class="text-center  price bg-info text-light p-2 " colspan="4">Total Price
 <span class="ms-5  " style=" font-size:18px; font-style:italic; font-weight:750;" >RS.<?php echo $grand_total;   ?></span>
      </div>
      <a style="  border-radius:5px; font-size:20px; font-style:italic; font-weight:780; background-color:dodgerblue; " class=" text-center kkk mx-auto  w-50 mt-1  text-light p-2  " href="checkout.php">Checkout</a>
</div>
   <!-- end toggle -->
    <!-- silder section starts -->
    <div   style="overflow:hidden;"  id="carouselExampleIndicators" class="slide " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pics/Rice-Food-Plate-PNG (1).png" class="d-block plate  " alt="..." style=" border-radius:50%; margin-top:8vh; margin-right:10%; float:right; height:470px; width:470px;" data-aos="fade-up" data-aos-duration="1500"  >
                <div data-aos="fade-right" data-aos-duration="2500"   
 class="carousel-caption d-md-block">
                    <h2 style="font-size:45px;  font-weight:500; font-family:Georgia, 'Times New Roman', Times, serif; letter-spacing:1px; "   class="text">  Welcome&nbsp;Foodies</h2>
                    <!-- <h1 style="position:relative; top:30px;" >Different Spices For The <br> Different Tastes 😋</h1> -->
                    <p class="p-2 acha"><span style="font-size:43px ; position:absolute;top:-20px;  left:-60px; font-family:'Times New Roman', Times, serif; font-weight:bold;" class="text-dark foodi">Different Spices For The <br> Different Tastes 😋</span><br></p>
               
                    <p class="text-secondary  " style="position:absolute; left:-50px; margin-top:5vh; font-size:30px;  ">Lorem ipsum dolor sit amet consectetur adipi<br> elit hic quam debitis tenetur harum nemo.</p>
        <button style="border-radius:30px; border:none; font-size:20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight:600; font-style:oblique;"  class=" btn bg-warning  button p-2">&nbsp; Order now &nbsp; </button>
                   
                    
                </div>
                
            </div>
            
      
        </div>
    </div>
    <!--silder section ends -->
    <!-- How it works section start -->
    <div id="benefit"  style="margin-top:11vh ;"
     class="feat ">
        <h1  class="heading"><span> Our Features</span> </h1>
    </div>
    <div   class="container">
        <div data-aos="zoom-out-up"    data-aos-duration="500"
     data-aos-anchor-placement="center-bottom" class="row ">
            <div class="col-lg-4 col-md-6 col-sm-3 p-5 ">
                <div   class="card" style="width: 18rem;">
                    <img src="pics/feature-img-1.png" class="card-img mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fresh and Organic</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, quaerat!</p>
                        <a href="#" class="btn1 btn btn-primary mb-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="zoom-out-up"    data-aos-duration="500"
     data-aos-anchor-placement="center-bottom" class="row">
            <div class="col-lg-4 col-md-6 col-sm-3 p-5 ">
                <div   class="card" style="width: 18rem;">
                    <img src="pics/feature-img-2.png" class="card-img mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Free Delivery</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptas?</p>
                        <a href="#" class="btn1 btn text-light btn-primary mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="zoom-out-up"    data-aos-duration="500"
     data-aos-anchor-placement="center-bottom" class="row">
            <div class="col-lg-4 col-md-6 col-sm-3 p-5 ">
                <div   class="card" style="width: 18rem;">
                    <img src="pics/feature-img-3.png" class="card-img mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Easy Payments</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, voluptas?</p>

                        <a href="#" class="btn1 btn btn-primary text-center text-light">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--How it works section start ends -->
    <!-- How to order section start -->
    <div  class="feat">
        <h1 class="heading"><span>How To Order ?</span> </h1>
        <h5 class="text-center text-success">Follow The Steps</h5>
    </div>
    <div data-aos="zoom-out-down"   
     data-aos-duration="700" class="container mb-5 oder">
        <div  class="row mt-3">
            <div class="col-lg-4 col-md-6 col-sm-3  ">
                <i class="fa fa-street-view text-secondary mb-4 mx-5" style="font-size: 40px;"></i>
                <h5 style="background-color:  #84c1ff;height:50px;width:50px;border-radius:50%;" class="p-2 text-center mx-5">1</h5>
                <h5>Choose Your Loction</h5>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-3 ">
                <i class="fa fa-leaf text-success mb-4 mx-5 " style="font-size: 40px;"></i>
                <h5 style="background-color: #84c1ff;height:50px;width:50px;border-radius:50%;" class=" p-2 text-center mx-5">2</h5>
                <h5>Make Your Order</h5>
            </div>
            <div  class="col-lg-4 col-md-6 col-sm-3   ">
                <i class="fa fa-truck text-danger mb-4 mx-5" style="font-size: 40px;"></i>
                <h5    style="background-color: #84c1ff;height:50px;width:50px;border-radius:50%;" class=" p-2 text-center mx-5 ">3</h5>
                <h5>Food on the Way</h5>
            </div>
        </div>
    </div>

    <div   style="margin-top:-10vh  !important; position:absolute;" id="menu"></div>
    <!-- How to order section end -->

    <!-- menu section start -->
    <div  class="feat" >
        <h1 class="heading"><span>Menu Categories </span> </h1>
    </div>
    <!-- menu items -->
    <div   
     data-aos-duration="300" data-aos="fade-up"
 class="container menu-body"   >
        <div class="main ">
            <div class="row">
            <?php
  $start = "SELECT * FROM `product`";
  $sql = mysqli_query($con,$start);
  foreach ($sql as $row){
?>
 <div class=" col-lg-3 col-md-4 col-sm-6   p-5 " data-aos-duration="300" data-aos="fade-up">
    <form action="" method="post">
       <div class="box">
       <div class="box-img">
 <img   src="<?=  $row['image']; ?>   " >
  </div>
      <div class="content">
     <h2><?= $row['Productname'] ?></h2>
 </div>
  <div class="btn">
  <span style="font-size:20px; font-weight:bolder;" class="text-light">𝑸𝒖𝒂𝒏𝒕𝒊𝒕𝒚    <input type="number" style="width: 60px ; border-radius:5px;"  class="form-label" value="<?= $row['quantity'] ?>" ></span>
  <h3 class=" me-5 text-light">𝓟𝓻𝓲𝓬𝓮 =<?= $row['price'] ?></h3>
  <li>
      <input type="hidden" name="product_name" value="<?php echo $row['Productname']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
      <input type="submit" style="font-size:22px; border-radius:5px;"  class="xc  w-75 alert-success p-1 "  value="add to cart" name="add_to_cart">  
                </div>  
                    </div>
                </form>
                </div>
                <?php }?>   
                </div>
            </div>
        </div>
        <!-- menu section end-->
        <!--  Reviews Start section -->
        <div class="feat">
            <h1 class="heading"><span> Customers Reviews </span> </h1>
        </div>
        <div  class="container">
            <div  data-aos-duration="1000" data-aos="fade-up" class="row ">
                <div class="col-lg-4 col-md-6 col-sm-3 p-5 mt-3 ">
                    <div class="card card-reviews" style="width: 18rem;">
                        <img src="pics/c4.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Camera</h5>
                            <p class="card-text">One picture succeeded another in his imagination</p>
                            <div class="rating-css mb-2">
                                <div class="star-icon">
                                    <input type="radio" name="rating6" id="rating6">
                                    <label for="rating6" class="fa fa-star"></label>
                                    <input type="radio" name="rating7" id="rating7">
                                    <label for="rating7" class="fa fa-star"></label>
                                    <input type="radio" name="rating8" id="rating8">
                                    <label for="rating8" class="fa fa-star"></label>
                                    <input type="radio" name="rating9" id="rating9">
                                    <label for="rating9" class="fa fa-star"></label>
                                    <input type="radio" name="rating10" id="rating10">
                                    <label for="rating10" class="fa fa-star"></label>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div  data-aos-duration="1000" data-aos="fade-up"class="row">
                <div class="col-lg-4 col-md-6 col-sm-3 p-5 mt-3">
                    <div class="card card-reviews" style="width: 18rem;">
                        <img src="pics/c5.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bags</h5>
                            <p class="card-text">It's one thing to buy clothes that are in fashion because you like them</p>
                            <div class="rating-css mb-2">
                                <div class="star-icon">
                                    <input type="radio" name="rating11" id="rating11">
                                    <label for="rating11" class="fa fa-star"></label>
                                    <input type="radio" name="rating12" id="rating12">
                                    <label for="rating12" class="fa fa-star"></label>
                                    <input type="radio" name="rating13" id="rating13">
                                    <label for="rating13" class="fa fa-star"></label>
                                    <input type="radio" name="rating14" id="rating14">
                                    <label for="rating14" class="fa fa-star"></label>
                                    <input type="radio" name="rating15" id="rating15">
                                    <label for="rating15" class="fa fa-star"></label>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div  data-aos-duration="1000" data-aos="fade-up" class="row">
                <div class="col-lg-4 col-md-6 col-sm-3 p-5 mt-3">
                    <div class="card card-reviews" style="width: 18rem;">
                        <img src="pics/c7.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rings</h5>
                            <p class="card-text">If a pure diamond ring is not appealing, individuals can find a wide </p>
                            <div class="rating-css mb-2">
                                <div class="star-icon">
                                    <input type="radio" name="rating1" id="rating1">
                                    <label for="rating1" class="fa fa-star"></label>
                                    <input type="radio" name="rating2" id="rating2">
                                    <label for="rating2" class="fa fa-star"></label>
                                    <input type="radio" name="rating3" id="rating3">
                                    <label for="rating3" class="fa fa-star"></label>
                                    <input type="radio" name="rating4" id="rating4">
                                    <label for="rating4" class="fa fa-star"></label>
                                    <input type="radio" name="rating5" id="rating5">
                                    <label for="rating5" class="fa fa-star"></label>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      



      <!-- Footer secton starts -->
      <footer id="footer" class="main-footer">
        <div class="container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div   class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div data-aos-duration="2000" data-aos="fade-up"   class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="#"><img src="https://i.ibb.co/wBkDzLb/ak-logo-red-blue.png" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam.</p>
                                        <p>Quis nostrud exercitation ullam aboris nisi aliquip exea commodo consequat duis aute irure.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div   data-aos-duration="2000" data-aos="fade-up"    class="footer-widget links-widget">
                                    <h2 style="font-family:Georgia, 'Times New Roman', Times, serif;">Quick Links</h2>
                                    <ul class="footer-list">
                                        <li><a href="#">Company History</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div   data-aos-duration="2000" data-aos="fade-up"    class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div  class="footer-widget gallery-widget">
                                    <h2 style="font-family:Georgia, 'Times New Roman', Times, serif;">Gallery</h2>
                                    <div class="widget-content">
                                        <div class="http://t.commonsupport.com/morris/images-outer clearfix">
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/CKNmhMX/blog1.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/m5yGbdR/blog2.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/CKNmhMX/blog1.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/m5yGbdR/blog2.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/CKNmhMX/blog1.jpg" alt=""></a></figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="https://i.ibb.co/m5yGbdR/blog2.jpg" alt=""></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div  data-aos-duration="2000" data-aos="fade-up"     class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget info-widget">
                                    <h2 style="font-family:Georgia, 'Times New Roman', Times, serif;" >Contact Info</h2>
                                    <ul class="info-list">
                                        <li>Flat 20, Reynolds Neck, North Hele naville, FV77 8WS</li>
                                        <li>+2(305) 587-3407</li>
                                        <li>info@morris.com</li>
                                    </ul>
                                    <!-- Social Links -->
                                    <ul class="social-links">
                                        <li class="google"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                        <li class="facebook"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row clearfix">
                    
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright"><span class="theme_color">©2022𝓕𝓸𝓸𝓭 𝓟𝓪𝓽𝓲𝓮𝓷𝓽&♥𝒜𝓁𝓁 𝑅𝒾𝑔𝒽𝓉𝓈 𝑅𝑒𝓈𝑒𝓇𝓋𝑒𝒹♥</span></div>
                    </div>
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
  
    </footer>
     
    <!-- end  -->

 
   
    <!-- start javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init(
  {
    // offset: 200,
    // duration: 2000,
  }
  );
</script>

<script src="index.js"></script>
<!-- custom link -->
</body>


</html> 