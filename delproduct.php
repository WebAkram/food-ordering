<?php

require_once "connection.php";
$id=$_GET['did'];


// $delete = "SELECT FROM `product` WHERE `id`='$id'";
// $result =mysqli_query($con,$delete);

// $row =mysqli_fetch_assoc($result);
// unlink("productimage/".$row['image']);

$sql="DELETE FROM `product` WHERE `id`='$id'";
$res=mysqli_query($con,$sql);
if($res){

    header("location:dashboard.php");
    
}

   
 

?>

<?php

if(isset($_GET['delete_all'])){
  mysqli_query($con, "DELETE FROM `product`");
  header('location:dashboard.php');
}
  ?>



