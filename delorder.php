<?php


require_once "connection.php";
$id=$_GET['aid'];
$sql="DELETE FROM `orders` WHERE `id`='$id'";
$res=mysqli_query($con,$sql);
if($res){
    header("location:order.php");
};
