 <?php
  require_once 'connection.php';
$grand_total = 0;
$allItems = ''; 
$items = [];

$sql = "SELECT CONCAT(name, '(',quantity,')') AS ItemQty, price FROM cart";
$query = mysqli_query($con,$sql);
    foreach($query as $row){
      $grand_total += $row['price'];
      $items[] = $row['ItemQty'];
    }
    $allItems = implode(', ', $items);
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body style="background-color:cadetblue;">



<div class="container bg-light">
  <a href="index.php">
<button type="button" style="display:flex; float:right;" class="btn-close text-reset mt-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</a>
<div class="row justify-content-center  mt-2">
      <div class="col-lg-6 mt-5">
        <h4 style="font-size:30px; font-family:monospace; font-weight:600;" class="text-center  alert-primary  mt-4">Complete your order!</h4>
        <div class=" p-3  text-center">


        <h5 class="lead alert-info"><b style="font-size:23px; font-family:cursive; font-weight:600; ">Product(s) : </b> <span style="font-size:21px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;; font-weight:600;"><?= $allItems; ?> </span></h5>
          <h5 class="lead"><b style="font-size:22px; font-family:monospace; font-weight:600;"  >Delivery Charge : </b>Free</h5>
          <h5><b style="font-size:23px; font-family:cursive;">Total Amount Payable :</b><?= number_format($grand_total,2) ?>/-</h5>
        </div>

        <form action="orders.php" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
            
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group mt-2">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group mt-2">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div> 
          <div class="form-group mt-2">
            <textarea name="address" class="form-control" rows="2" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h3 style="font-style:italic; font-weight:600; font-size:25px; " class="text-center lead">Select Payment Mode</h3>
          <div class="form-group mt-2">
            <select name="pmode" class="form-control">
              <option value=""  selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group mt-2">
            
         <a  href="orders.php">
            <input type="submit" name="btn" style="font-size:20px; font-weight:600; font-family:monospace;" value="Place Order" class="btn   btn-success text-light btn-outline-dark w-100">
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
 
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>