<?php 
	include_once("../settings/core.php");
	include_once("../controllers/product_contrroller.php");
	include("../navbars/header.php");
	

  	// Check if the user is logged in, if not then redirect him to login page
    //if logged in check if admin, if not redirect to login page 

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["role"] == 1){ 
            //echo "Hello admin";
            $role="Admin";
        
        }

        else{ 
            //echo "You are not ADMIN.";
            $role="User";
            //echo '<a href="l../login/login.php"">Login</a>';
        }
    }

    else{
        header("location: ../login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

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
	<style>
		#alert-box {
			background-color: 'red';
			font-size: '20px';
			color: 'white';
		}
	</style>

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!--header-->
	<?php pageheader("Fresh and Organic","Shop");?>
	<!-- end header -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
							<?php foreach(selectAllCategories_ctr() as $categories):?>
							<li data-filter=".<?php echo $categories['cat_id']?>"><?php echo $categories['cat_name'] ?></li>
							<?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">

				<?php foreach(selectAllProducts_ctr() as $row):?>

				<div class="col-lg-4 col-md-6 text-center <?php echo $row['product_cat']?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php?pid=<?php echo $row['product_id'];?>"><img src=<?php echo $row['product_image']; ?> alt="" height="200"></a>
						</div>
						<h3><?php echo $row['product_title']; ?></h3>
						<p class="product-price"><span></span>GHC <?php echo $row['product_price']; ?> </p>
						<a href="cart.php" class="cart-btn" onclick="quickQuantity(<?php echo $row['product_id'];?>)"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
					
				</div>
				
				<?php endforeach;?>
				
			</div>

			
		</div>
	</div>
	<!-- end products -->

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

function quickQuantity(x){
	event.preventDefault();
//   var productid=document.getElementById(x).value;
//   alert(qttt);
//   alert(x);
 

	$.ajax({
		type: 'POST',
		url: '../actions/add_to_cart.php',
		data:  {
			pid: x
		} ,
		success: function(data,status) {
			// alert('AJAX call was successful!');
			// $('#alert-box').html(data);
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