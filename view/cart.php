<?php include("../navbars/header.php");
include("../settings/core.php");
include ("../controllers/product_contrroller.php");
include ("../controllers/cart_controller.php");
include_once("../settings/core.php");

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

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
	<?php pageheader("Fresh and Organic","Cart");?>
	<!-- end header -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php $selallCart= selectAllCart_ctr();
                                $tprices_array= array(); 
                                
                                foreach ($selallCart as $row):?>

									<?php  
									if($getcustomerID===$row['c_id']):
                                        $product_id= $row['p_id'];
                                        $selfromProducts=selectAProduct_ctr($product_id);
                                        $item_total= ($selfromProducts['product_price'])*($row['qty']);
                                        array_push($tprices_array,$item_total)
										
									?>
										
										<tr class="table-body-row" onchange="updateCart_fxn('<?php echo $product_id?>') ">
											<td class="product-remove"><a href="" onclick="removeProduct_fxn(<?php echo $selfromProducts['product_id']; ?>)"><i class="far fa-window-close"></i></a></td>
											<td class="product-image"><img src="<?php echo $selfromProducts['product_image'];?>" alt=""></td>
											<td class="product-name"><?php echo $selfromProducts['product_title'];?></td>
											<td class="product-price">GHC <?php echo $selfromProducts['product_price'];?></td>
											<td  class="product-quantity"><input type="number" id="<?php echo $product_id?>" value="<?php echo $row['qty'];?>" min="1"></td>
											<td class="product-total">GHC <?php echo $item_total;?></td>
										</tr>

									<?php endif;?>
									
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Total:</strong></td>
									
									<td id="display_total">GHC 
										<?php echo number_format(array_sum($tprices_array),2); 
										$_SESSION['total_price']= array_sum($tprices_array);
										?>
									</td>
									
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<!-- <form action="../actions/update_cart_copy.php" method="POST">
							<input type="submit" name="update_btn" class="boxed-btn" value="Update Cart">
							</form> -->
							<a href="checkout.php" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.php">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- footer -->
	<?php pagefooter();?>
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

<script type="text/javascript">

	function removeProduct_fxn(productid){
		event.preventDefault();

		if(confirm('Product will be removed from cart. Proceed?') == true) {
			$.ajax({
				type: 'POST',
				url: '../actions/remove_from_cart.php',
				data:  {
					pid: productid,
					cid: <?php echo $getcustomerID ?>,
				} ,
				success: function(data,status) {
					// alert('AJAX call was successful!');
					// $('#alert-box').html(data);
					window.location.reload();
					alert(data);
					//alert(status);
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert("Error:"+xhr.status);
					alert(thrownError);
				}
			});
		}

	}

	//create function named updateCart_fxn()
	function updateCart_fxn(productid){
		event.preventDefault();
		// alert ("changed");
		
		var qty=document.getElementById(productid).value;
		// alert(productid);
		// alert(qty);

		$.ajax({
			type: 'POST',
			url: '../actions/update_cart.php',
			data:  {
				productid: productid,
				cid: <?php echo $getcustomerID ?>,
				newquantity: qty,
			} ,
			success: function(data,status) {
				// alert('AJAX call was successful!');
				// $('#alert-box').html(data);
				window.location.reload();
				alert(data);
				//alert(status);
				
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert("Error:"+xhr.status);
				alert(thrownError);
			}
		});
	}

</script>