<?php
require_once "connection.php";
include_once 'product.php';
// $id=$_GET['id'];
 if (isset($_POST['btn'])) {
  $productname = $_POST['name'];
  $quantity = $_POST['quan'];
  $cost = $_POST['price'];
  $file = $_FILES['photo'];
 
  $file_size = ($file['size'] / 1024) / 1024;

  $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
  $path = "productimage/" . time() . "." . $ext;

  move_uploaded_file($file['tmp_name'], $path);

 $sql="UPDATE `product` SET `name`='$productname',`price`='$cost',`image`='$path' WHERE `id`='$id'";
 $res=mysqli_query($con,$sql);



   if($res){
       header("location:product.php");
   }
   else{
       echo "product  don't update ";
   }
};
?>