<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="row mt-4">
<?php 
include 'connect.php';
$query = "SELECT * FROM `productdetail`;";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-4 py-2">
    <div class="card mb-3">
        <img src="uploads/'.$row['parduct_image'].'" class="card-img-top img" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>  '.$row['product_name'].'</b> </h5>
            <hr><p class="card-text"><b>Product Price</b><hr> Rs <nbsp><nbsp>'.$row['product_price'].'
              </p>
              <a href="order.php?id='.$row['product_id'].'" class="btn btn-primary card-btn text-center"><b>Buy Now</b></a>
        </div>
    </div>

</div>';

}





 ?> 

 </div>
 </div> 
<div class="container"><a href="add.php" class="mb-3 text-center  btn-secondary p-1"  style="width: 10rem;" role="button">Add More Items </a></div> 
</body>
</html>