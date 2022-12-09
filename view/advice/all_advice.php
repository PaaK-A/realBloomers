<?php 
include("../../navbars/header.php");
include("../../product_contrroller.php");
include("../../settings/core.php");

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
    header("location: ../../login/login.php");
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
	<title>Advice</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../../assets/css/responsive.css">

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
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="../../assets/img/Bloomersofficial.png" alt="" width="100" height="100">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="../../view/shop.php">Home</a>
								</li>
								<li><a href="../../about.php">About</a></li>
								<li hidden><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li>
								<li><a href="../../view/advice/all_advice.php">Advice</a>
								</li>
								<li><a href="../../view/shop.php">Shop</a>
								</li>
								<li>
									<div class="header-icons">
                                        <a class="shopping-cart" href="../../login/logout.php">LOGOUT</a> 
										<a class="shopping-cart" href="../../view/cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#" hidden><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#" hidden><i class="fas fa-search" hidden></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>A little help never hurt</p>
						<h1>ADVICE</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


	<!-- advice -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
							<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end advice -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>At our plant shop, you'll find a wide range of healthy, carefully curated plants along with expert advice and support to help you create the perfect green oasis in your home or office.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Cantoments, Accra, Ghana.</li>
							<li>support@bloomers.com</li>
							<li>+233 20 567 9876</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="../../index.php">Home</a></li>
							<li><a href="../../about.php">About</a></li>
							<li><a href="../../view/shop.php">Shop</a></li>
							<li><a href="../../view/advice/all_advice.php">Advice</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Be You</h2>
						<p>Feel free to express yourself the only way you can.</p>
						<!-- <form action="index.php">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<!-- <div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div> -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	
	<!-- jquery -->
	<script src="../../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../../assets/js/main.js"></script>

</body>
</html>