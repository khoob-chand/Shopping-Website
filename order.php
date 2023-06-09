<?php 
if(isset($_GET['id'])){
  include 'connect.php';
  $id=$_GET['id'];
$query = "SELECT * FROM productdetail WHERE  product_id=$id";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_array($result);
$product_name= $row['product_name'];
$product_price= $row['product_price'];
$product_image= $row['parduct_image'];
$delivery= 50;
$total=$delivery+$product_price;



}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>order_details</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

  <h2 class="container text-center colorofdetail mt-3">Fill the details to complete the order</h2>
  <table class="table container border mt-3 table-striped table-bordered">
    <thead>
      <h4 class="container"><b>Product Details:</b></h4>

    </thead>
    <tbody>
      <tr>

        <th colspan="1">Product Name:</th>
        <td>
          <?php echo $product_name?>
        </td>
        <td rowspan="4" class="imageofmobile" style="width:100px"><img src="<?php echo 'uploads/'.$product_image ;?>"
            style="width:400px;"> </td>

      </tr>
      <tr>

        <th colspan="1">Product Price:</th>
        <td>
          <?php echo"Rs ".  $product_price."/-"?>
        </td>


      </tr>
      <tr>

        <th colspan="1">Delivery Charge:</th>
        <td>
          <?php echo  "Rs ".$delivery."/-"?>
        </td>


      </tr>
      <tr>

        <th colspan="1">Total Price:</th>
        <td>
          <?php echo "Rs ". $total."/-"?>
        </td>


      </tr>
    </tbody>
  </table>


  
  <!-- <form class="customerdetail" action="payment.php" method="POST"> -->
  <form class=" container" action="payment.php" method="POST">
  <h4 class=" mt-5">Enter Details to Complete Your Order :</h4>


    <input type="hidden" name="product_pay_name" value=<?php echo $product_name;?>>
    <input type="hidden" name="product_pay_price" value=<?php echo $total;?>>
    <div class="form-group mb-2">

      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter Your Name">

    </div>
    <div class="form-group mb-2">

      <input type="text" class="form-control"  name ="email"placeholder="Enter your Email">
    </div>
    <div class="form-group mb-2">
      <input type="text" class="form-control" name="mobile" placeholder="Enter your Number">

    </div>
    <div class="form-group mb-2">
      <input type="text" class="form-control" name="address" placeholder="Enter your Address">

    </div>
    <button type="submit" name="submit" class="btn btn-primary alert alert-danger">
      <?php echo '<b>Click to Pay Rs  '.$total.'<b>'; ?>
    </button>
  </form>

</body>

</html>