
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>
<?php if(isset($_GET['payment_id']))
$payment_id= $_GET['payment_id'];
$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$amount=$_GET['price'];

?>
<div class="container text-center alert alert-success " role="alert">
  <h3>Thankyou your order is Successfully Placed !</h3>
</div>
<table class="table container  mt-3 table-striped table-bordered  ">
    <thead>
      <h4 class="container"><b>Ordered Details:</b></h4>

    </thead>
    <tbody>
      <tr>

        <th>Payment_id:</th>
        <td>
          <?php echo $payment_id;?>
        </td>
       

      </tr>
      <tr>

        <th >Customer_name:</th>
        <td>
          <?php echo  $name;?>
        </td>


      </tr>
      <tr>

        <th >Customer Email:</th>
        <td>
          <?php echo  $email;?>
        </td>


      </tr>
      <tr>

        <th >Customer No.:</th>
        <td>
          <?php echo  $phone;?>
        </td>


      </tr>
      <tr>

        <th >Amount Paid.:</th>
        <td>
          <?php echo  $amount;?>
        </td>


      </tr>
    </tbody>
  </table>
    
</body>
</html>
