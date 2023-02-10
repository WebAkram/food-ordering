<?php


require_once "connection.php";
$id=$_GET['remove'];
$sql="DELETE FROM `cart` WHERE `id`='$id'";




$res=mysqli_query($con,$sql);
if($res){
    header("location:index.php");
};
?>


<!-- 




if(isset($_GET['delete_all'])){
  mysqli_query($con, "DELETE FROM `cart`");
  header('location:index.php');
}; -->





