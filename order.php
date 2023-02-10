
 <?php

require 'connection.php';
session_start();
if(!isset($_SESSION['uid']))
{
 header("location:login.php");
}
?>
 
 
 
 
 
 <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="order.css" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
   <style>






   </style>
<body  style="background-image:url(akram.jpg) ; background-repeat: no-repeat;
background-size: cover;">
    <?php
    include_once 'navbar.php';
    ?>
    <div class="table mt-5">
        <div class="table_header ">
            <h3  style="position:relative; left:40%;" class="hhh  mt-5  " >Order Details</h3>
            <form action="search.php" method="GET" class="d-flex mt-5 me-5">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button style="font-style:italic; font-weight:600;"  class="btn bg-dark text-warning" name="q" type="submit">Search</button>
      </form>
        </div>
       
        <div class="table_section">
            <table class=" ">
                <thead  >
                    <tr style="font-family:monospace; font-weight:900;  background-color:springgreen; border-radius:20%; " class="text-center  bg-dark">
                        <th scope="col">Customer id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Products</th>
                        <th scope="col">Pmode</th>
                        <th scope="col">Amount_paid</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="hello">
                <?php
     require_once 'connection.php';
 $query = "SELECT * FROM `orders`";

   $res = mysqli_query($con,$query);
   if ($res->num_rows > 0) {
   foreach($res as $kk){
     ?>
                    <tr class="hi">
                        <td><?php echo $kk['id']; ?></td>
                        <td><?php echo $kk['name']; ?></td>
                        <td><?php echo $kk['phone']; ?></td>
                        <td><?php echo $kk['email']; ?></td>
                        <td><?php echo $kk['address']; ?></td>
                         <td> <span style="font-size:large;">   <?php echo $kk['products']; ?></span> </td> 
                        <td><?php echo $kk['pmode']; ?></td>
                        <td><?php echo $kk['amount_paid']; ?></td>
                        
                        <td> 
                            <a href="delorder.php?aid=<?php echo $kk['id']?>">
                             <i style="font-size:22px;"  class="fa fa-trash-o fa-lg btn btn-danger  "></i></td>
                             </a>
                    </tr>
                    

                             <?php
 
          
     }
      }
     
      else{
 
      echo '
       <img src="order.png" alt="" width="1000px" height="500px"  style="position: relative; left:200px;" >';
 }?>

                </tbody>
            </table>
        </div>
     
    </div>
</body>

</html>