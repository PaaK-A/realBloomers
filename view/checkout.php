<!-- embed script -->
<!-- <script src="https://widget.paybox.com.co/js/app.js" defer></script> -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<?php 
include("../navbars/header.php");
include("../settings/core.php");
include_once("../controllers/customer_controller.php");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    if($_SESSION["role"] == 1){ 
        //echo "Hello admin";
        $role= "ADMIN";
    }

    else{ 
        //echo "You are not ADMIN.";
        $role= "User";
        //echo '<a href="l../login/login.php"">Login</a>';
    }
}

else{
    header("location: ../login/login.php");
}

$getcustomerID= $_SESSION['cid'];
// echo $getcustomerID;

//use selectACustomer_ctr to select a customer using $getcustomerID
$customer=selectACustomer_ctr($getcustomerID);
// echo $customer['customer_name'];

$invoice_num=mt_rand(100000,999999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php pageheader("Fresh and Organic","Check Out Product");?>
	<!--  end header-->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="">
						        		<p><input type="text" placeholder="Name" id="customername" value="<?php echo $customer['customer_name'];?>"></p>
						        		<p><input type="email" placeholder="Email" id="customeremail" value="<?php echo $customer['customer_email'];?>"></p>
						        		

										<p><a href="" class="boxed-btn" onclick="payWithPaystack()">Place Order</a></p>

										<!-- <p><paybox-button-widget merchant-key="f3295741-3bd8-4149-8bed-bd5f6c0bc184" total="1.0" order-id ="PB_1234" currency="GHS" type="danger rounded" payload='{\"key\":\"data\"}'  shipping="enabled"> Customised PayBox Button </paybox-button-widget></p> -->
						        	
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <!-- end billing address -->

						  <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Delivery Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<p><input type="text" placeholder="Address"></p>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion" hidden>
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Your card details goes here.</p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<tr>
									<td>Strawberry</td>
									<td>$85.00</td>
								</tr>
								<tr>
									<td>Berry</td>
									<td>$70.00</td>
								</tr>
								<tr>
									<td>Lemon</td>
									<td>$35.00</td>
								</tr>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>$190</td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>$50</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>$240</td>
								</tr>
							</tbody>
						</table>
						

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<!-- footer -->
	<?php echo pagefooter();?>
	<!-- end footer -->
	
	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>

<!-- <script>
	payload={
		"order_id":1234,
		"items":[
		{"item1":"item1-description","cost":20.0},
		{"item2":"item2-description","cost":10.0},
		{"item3":"item3-descrptions","cost":0.90},
		]
	}

	console.log(JSON.stringify(payload));
</script> -->

<script>
	
	function payWithPaystack() {
		// var mobileNetwork=document.getElementById("mobile_network").value;
		// var mobileNum=document.getElementById("mobilenumber").value;
		var customername=document.getElementById("customername").value;
		var customeremail=document.getElementById("customeremail").value;
		var customerid= <?php echo $getcustomerID ?>

        event.preventDefault();
        let handler = PaystackPop.setup({

            key: 'pk_test_100119966e976d57e253930b199f7065fa2c1ed8', // Replace with your public key
            email: customeremail,
            amount: 1,
            currency: 'GHS',
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function(){
            alert('Window closed.');
            },
            callback: function(response){
				let message = 'Payment complete! Reference: ' + response.reference;
				alert(message);
				// add_payment_detail_ctrl
				email = customeremail;
				amount = 1;
				var dataString = 'email='+ email + '&amount='+ amount + '&cid='+ customerid + '&invoice='+ invoice_num;

				if (response.status=='success'){
				//alert("Please Fill All Fields");
			
					$.ajax({
						type: "POST",
						url: "../actions/process_payment.php",
						data: {dataString},
						cache: false,
						success: function(result){
							alert(result);
							
						// window.location = "pay"
						},
						error: function (xhr, ajaxOptions, thrownError){
							alert("Error:"+xhr.status);
							alert(thrownError);
						}
					});
				}
            }
        });
        handler.openIframe();
    }
</script>