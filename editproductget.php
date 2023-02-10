<?php
 require_once 'connection.php';
 
 include_once 'navbar.php';



// $id=$_GET['id'];
 if (isset($_POST['btm'])) {
  $fid = $_POST['gid'];
  $productname = $_POST['name'];
  $quantity = $_POST['quan'];
  $cost = $_POST['price'];
  $file = $_FILES['photo'];
 
  $file_size = ($file['size'] / 1024) / 1024;

  $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
  $path = "productimage/" . time() . "." . $ext;

  move_uploaded_file($file['tmp_name'], $path);
  $sql="UPDATE `product` SET `Productname`='$productname',`quantity`='$quantity',`price`='$cost',`image`='$path' WHERE `id`='$fid'";
 $res=mysqli_query($con,$sql);



   if($res){
       header("location:dashboard.php");
   }
   else{
       echo "product  don't update ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="product.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="background-image:url(akram.jpg); background-repeat: no-repeat;
background-size: cover;" >
  <!-- add/edit form modal -->
  
  <div class="w-50 p-3  fgg "  style="position:absolute;top:115px; left:25%;  "  >
        <h5 style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:22px; " >Add/Edit Product <i style="font-size:23px ;" class=" fa fa-user-circle-o"></i>
          <a href="product.php">
          <button style="float:right; font-size:20px; "  type="button" class="btn-close jkl  " aria-label="Close"></button>
          </a>
          </h5>
     
      <form action=""  method="post" enctype="multipart/form-data">
    
            
            <?php
                  $sid=$_GET['aid'];
$sql1="SELECT * FROM `product` WHERE `id`='$sid'";
            $result2=mysqli_query($con,$sql1);
            $row2=mysqli_fetch_array($result2);     
            ?> 
            
                   <input type="hidden" name="gid" value="<?php echo $row2['id'] ?>">
                   
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="recipient-name" class="col-form-label "> Product_Name:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" ><i style="font-size:22px ;" class="fa fa-user-circle-o p-1" aria-hidden="true"></i>
            </div>
            <input type="text" class="form-control " id="username" value="<?php echo $row2['Productname'] ?>" name="name" required="required">
            </div>
          
          <div class="form-group">
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label ">Quantity:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" ><i style="font-size:22px ;" class="fa fa-archive p-1" aria-hidden="true"></i></span>
            </div>
            <input type="number" class="form-control" value="<?php echo $row2['quantity'] ?>"  name="quan" required="required">
          </div>
          </div>
          <div class="form-group">  
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label ">Price:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text"><i  style="font-size:22px ; "  class="fa fa-money p-1" aria-hidden="true"></i></span>
            </div>
            <input type="number" class="form-control"  name="price"  value="<?php echo $row2['price'] ?>"       required="required" maxLength="10" minLength="10">
          </div>
          </div>
          <div class="form-group">
          <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label ">Photo:</label>
            <div class="input-group mb-2">
            <div   class="input-group-prepend">
            <span   > <img src="<?php echo $row2['image'] ?> " style=" border-radius:5%;" class="kpk"  width="60px;" height="49px;" alt=""></span>
            </div>
            <div class="custom-file form-control">
            <input type="file" class="custom-file-input   " style="color:transparent;" value="<?php echo $row2['image'] ?>"   name="photo"  >
            </div>
            </div>

          </div>
      
           <button  style="float:right;" type="submit" class="btn btn-success ms-3 " name="btm">Submit</button>
        <a href="product.php" style="float:right;" >
        <button type="button" class="btn btn-danger shadow " aria-label="Close" >Close</button>
        </a>
     
        <!-- <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="userid" id="userid" value="adduser"> -->
     
      
      </form>
    </div>
  <!-- </div>
</div> -->
<!-- add/edit form modal end -->

</body>
</html>