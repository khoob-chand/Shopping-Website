<?php 

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["submit"])){
   
    $product_name=$_POST['product_name'];
    
    $product_price=$_POST['product_price'];
    $product_image=$_FILES["file"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);  
    
   

    move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);

    echo "uploaded successsfully";
    

    include 'connect.php';
   $sql = "INSERT INTO `productdetail` (`product_name`, `product_price`, `parduct_image`, `date`) VALUES ('$product_name', '$product_price','$product_image' , current_timestamp());";
   
    
    if(mysqli_query($conn, $sql)==true){
        echo "inserted successfully";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add product</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class=" backgroundodproductpage">
    <div class="container">
<form class="container mt-5 formtoaddproduct" method="post"  enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="product_name" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input type="number" class="form-control"name="product_price" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check fileofimage ">
  <label for="exampleCheck1" class="form-label">Product Image</label>
    <input type="file" class="form-check-input121 bg-light" name="file" id="exampleCheck1">
    
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary widthofsubmit mb-3" >Add to Product Page</button>
</form>
<div class="container text-center flexofproduct ">
    <h4 class="productpage mt-4  "><a class="text-dark" href="index.php">Go To Product Page</a></h4>
   
    
   </div>
</div> 
</body>
</html>