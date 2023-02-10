<?php
   include 'connection.php';
   session_start();

if (isset($_POST['btn'])) {
  $productname = $_POST['name'];
  $quantity = $_POST['quan'];
  $cost = $_POST['price'];
  $file = $_FILES['photo'];
 
  $file_size = ($file['size'] / 1024) / 1024;

  $ext = pathinfo(basename($file['name']), PATHINFO_EXTENSION);
  $path = "productimage/" . time() . "." . $ext;

  move_uploaded_file($file['tmp_name'], $path);

  $con->query("INSERT INTO `product`(`Productname`,`quantity`,`price`,`image`)
   VALUES ('$productname','$quantity','$cost','$path')");
 // header('');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

 

<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
</head>

<body style="background-image:url(akram.jpg) ; background-repeat: no-repeat;
background-size: cover;" >
<?php
  include_once 'navbar.php';
  ?>
      <div class="container hg  " style="position:absolute; top:13.5%;  left:8.5%;   "  >
   

    
<!-- add/edit form modal -->  
<div class="modal fade  " id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog style ">
    <div class="modal-content  ">
      <div class="modal-header  ">
        <h5 style="font-family:monospace; font-weight:800;" class="modal-title" id="exampleModalLabel">Add/New Product <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=""  method="POST" enctype="multipart/form-data">
      <div class="modal-body kp  ">
            <div class="form-group">
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="recipient-name" class="col-form-label "> Product_Name:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i style="font-size:22px ;" class="fa fa-user-circle-o p-1" aria-hidden="true"></i>
            </div>
            <input type="text" class="form-control " id="username" name="name" required="required">
            </div>
          </div>
          <div class="form-group">
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label">Quantity:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i style="font-size:22px ;" class="fa fa-archive p-1" aria-hidden="true"></i></span>
            </div>
            <input type="number" class="form-control"  name="quan" required="required">
          </div>
          </div>
          <div class="form-group">
            <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label">Price:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i style="font-size:22px ;" class="fa fa-money p-1" aria-hidden="true"></i></span>
            </div>
            <input type="number" class="form-control"  name="price" required="required" maxLength="10" minLength="10">
          </div>
          </div>
          <div class="form-group">
          <label style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold;  font-style:italic; font-size:18px;" for="message-text" class="col-form-label">Photo:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01"><i style="font-size:30px ;" class="fa fa-picture-o p-1" aria-hidden="true"></i></span>
            </div>
            <div class="custom-file form-control">
            <input type="file" class="custom-file-input "  name="photo" id="userphoto" >
            
            </div>
            </div>

          </div>
        
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="btn" id="addButton">Submit</button>
        <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="userid" id="userid" value="adduser">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->
  
      <div class="container"> 
        <div class="row">
</div>
    </div>   
      
<div class="row mb-3">
<div class="col-3">



<button type="button"   class="btn btn-dark text-light  shadow mt-4" data-toggle="modal" data-target="#userModal"> 𝑨𝒅𝒅 𝒏𝒆𝒘 <i  style="border-radius: 50%; " class="fa fa-plus p-1  bg-light text-danger" ></i></button>

</div>


<div class="col-9 mt-4">
<div class="input-group input-group-lg">
<div class="input-group-prepend">
<form action='search.php' method='GET'>
<input type="text" name="search"  style="width: 600px; font-size:22px; font-weight:600; font-family:'Times New Roman', Times, serif;   " class="  p-1  "  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput">
   <button style="font-size:19px; position:static;" class="btn kkk  mb-2 circle" name="send" type="submit">Search</button>
 
  </form>
  

  </div>            
                  
</div>

 

</div>
<!-- table -->
<table class="table " id="userstable">
  <thead    >

    <tr   style="font-family:monospace; font-weight:900; font-size:20px; background-color:springgreen; border-radius:20%;  ">
    <th  scope="col">ID</th>
      <th scope="col">Product_Image</th>
      <th scope="col">Product_Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $selectquery = "SELECT * FROM `product`";
    $query = mysqli_query($con,$selectquery);
    foreach($query as $row){
      ?>
  <tr class="bg-light shadow text-dark  akram" style="font-style:italic; font-weight:800; ">
  <td class="align-middle"><?php echo $row['id']; ?></td>
  <td class="align-middle"> <img src="<?php echo $row['image']; ?>" style="border-radius:50% !important;" class="img-box rounded float-left" ></td>
    <td class="align-middle"><?php echo $row['Productname']; ?></td>
    
    <td class="align-middle"><?php echo $row['quantity']; ?></td>
    <td class="align-middle"><?php echo $row['price']; ?></td>
    <td class="align-middle">
    <a href="editproductget.php?aid=<?php echo $row['id']?>" class="btn btn-success   me-2  edituser"  title="Edit"><i class="fa fa-pencil-square-o fa-lg"></i></a>
    <a  href="delproduct.php?did=<?php echo $row['id']?>"   class="btn btn-danger deleteuser " data-userid="14" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
    </td>
    </tr>
    <?php }?>

  
    </tbody>
</table>
<!--  -->


  
<!-- table end -->

    <ul style="cursor:pointer;" class="pagination justify-content-center mx-auto">
        <li><a class="prev " >< Prev</a></li>
        <li class="pageNumber active"><a  href="#">1</a></li>
        <li class="pageNumber"><a href="#" >2</a></li>
        <li class="pageNumber"><a href="#" >3</a></li>
        <li class="pageNumber"><a href="#" >4</a></li>
        <li><a  class="next" >Next ></a></li>
    </ul>




<!-- <input type="hidden" name="currentpage" id="currentpage" value="1"> -->
</div>
<div>






      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>






            

<div id="overlay" style="display:none;">
    <div class="spinner-border hk" style="width: 3rem; height: 3rem;"></div>
    <br/>
    Loading...
</div>
</body>
<script>
    $(document).ready(function(){
       $('#overlay').fadeIn().delay(500).fadeOut();
    });
</script>



<script>
$(document).ready(function(){

$('.next').click(function(){
$('.pagination').find('.pageNumber.active').next().
    addClass('active');
    $('.pagination').find('.pageNumber.active').prev().
    removeClass('active');
})

$('.prev').click(function(){
$('.pagination').find('.pageNumber.active').prev().
    addClass('active');
    $('.pagination').find('.pageNumber.active').next().
    removeClass('active');
})

})
 </script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>