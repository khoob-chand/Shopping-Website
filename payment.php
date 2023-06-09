<?php
use Razorpay\Api\Api;
if(isset($_POST['submit'])){
   
       $product_name=$_POST['product_pay_name'];
       // echo $product_name;
       // exit();
       $product_price=$_POST['product_pay_price'];
    //    echo $product_price;
       $customer_name=$_POST['name'];
       $customer_mobile=$_POST['mobile'];
       $customer_email=$_POST['email'];
       $customer_address=$_POST['address'];
}


   ?>



<script src="jquery-3.6.4.min.js"></script>
</head>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    

var options = {
    "key": "rzp_test_ikQrXFRpRa5PJV", // Enter the Key ID generated from the Dashboard
    "amount":"<?php echo $product_price*100?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise.
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    
     
    "handler": function (response){
       let payment_id= response.razorpay_payment_id;
   
        location.href ="receipt.php?name=<?php echo $customer_name;?>&price=<?php echo $product_price;?>&email=<?php echo $customer_email;?>&phone=<?php echo $customer_mobile;?>&payment_id="+payment_id
        // alert(response.razorpay_payment_id);
        // "payment_id":response.razorpay_payment_id
   
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature)
        
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }

};
console.log(options);
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
// document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    preventDefault();
// }
</script>
<?php
?>
