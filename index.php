<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	header("location: view/index.php");
}
else{
	// header("location: ../login/login.php");
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
	<title>Bloomers</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

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
							<img src="assets/img/Bloomersofficial.png" alt="" width="70" height="50">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="view/index.php">Home</a>
								</li>
								<li><a href="about.php">About</a></li>
								<li><a href="view/all_advice.php">Advice</a>
								</li>
								<li><a href="view/index.php">Shop</a>
								</li>
								<li>
									<div class="header-icons">
                                        <a class="shopping-cart" href="login/login.php">LOGIN</a>
										<a class="shopping-cart" href="login/register.php">REGISTER</a>  
										<a class="shopping-cart" href="view/cart.php"><i class="fas fa-shopping-cart"></i></a>
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
	<!-- end search arewa -->
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

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Organic & Inorganic</p>
							<h1>Plants for You</h1>
							<div class="hero-btns">
								<a href="view/index.php" class="boxed-btn">Products</a>
								<a href="view/all_advice.php" class="bordered-btn">Plant Care</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Quick Delivery</h3>
							<!-- <p>When order over $75</p> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" I am so impressed with the quality of the plants I received from this site! They arrived in perfect condition, and they are thriving in my garden. I will definitely be a repeat customer.  "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" I had a great experience shopping on this site. The selection of plants was impressive, and the customer service was top-notch. I was able to find exactly what I was looking for, and I received my order quickly and securely. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Libranian</span></h3>
								<p class="testimonial-body">
									"I was hesitant to order plants online, but I am so glad I did! The plants I received were healthy and beautiful, and they arrived on time and in great condition. I am very happy with my purchase, and I will definitely shop here again. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div> -->
				<div class="col-lg-12 col-md-24">
					<div class="abt-text">
						<p class="top-sub">Since Year 2014</p>
						<h2>We are <span class="orange-text">Bloomers</span></h2>
						<p>Sure, here is an example of a brief introduction to an e-commerce site that sells plants, called Bloomers:</p>

						<p>Bloomers is an online plant shop established in 2014. Our goal is to make it easy and affordable for everyone to bring a touch of nature into their homes. We offer a wide variety of plants, from succulents and cacti to tropical houseplants and herbs. We also offer quick delivery to most locations, so you can start enjoying your new plants as soon as possible.</p>

						<p>At Bloomers, we pride ourselves on offering high-quality plants at affordable prices. We carefully select each plant we sell, ensuring that it is healthy and well-suited to the conditions in your home. We also offer a 100% satisfaction guarantee, so if you are not completely happy with your purchase, you can return it for a full refund.</p>

						<p>In addition to our wide selection of plants, we also offer a range of accessories and supplies to help you create the perfect home for your plants. From pots and planters to fertilizers and soil amendments, we have everything you need to give your plants the care and attention they deserve. We also offer a subscription service, where you can receive a new plant delivered to your door every month. Try it out and discover the joy of adding new plants to your collection on a regular basis.</p>

						<p>At Bloomers, we believe that plants have the power to transform any space into a more vibrant and inviting place. Whether you're looking for a small potted plant to add some color to your desk, or a larger plant to make a statement in your living room, we have something for everyone. We also offer care guides and tips to help you keep your plants healthy and happy. Shop now and start blooming with Bloomers.</p>
						
						<a href="about.php" class="boxed-btn mt-4">Know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<!-- latest news -->
	<div class="latest-news pt-60 pb-100">
		<div class="container">

			<div class="row">
				<div class="col-lg-12 col-md-24">
					<div class="abt-text">
						<h2><span class="orange-text">Our</span> Advice</h2>
						<p>At Bloomers, we offer expert advice on how to care for your plants, whether they are organic or inorganic. Our tips and tricks will help you keep your plants healthy and thriving, and our wide selection of tools will ensure that you have everything you need to maintain your garden. From fertilizers to pruning shears, we have everything you need to keep your plants looking their best. Loook through our many posts to learn more about our plant care advice and products.</p>
						<p>At Bloomers, we understand that taking care of plants can be challenging, especially if you are new to gardening. That's why we offer a range of advice and tips on how to care for your plants, from choosing the right soil to providing the right amount of sunlight and water. We also offer a selection of high-quality tools, including pruning shears, watering cans, and fertilizers, to help you keep your plants healthy and happy. With our expert advice and premium products, you can be confident in your ability to successfully care for your plants</p>
						<a href="view/all_advice.php" class="boxed-btn">More Advice</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->


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
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="/index.php">Home</a></li>
							<li><a href="/about.php">About</a></li>
							<li><a href="/view/shop.html">Shop</a></li>
							<li><a href="/view/all_advice.php">Advice</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Be You</h2>
						<p>Feel free to express yourself the only way you can.</p>
						<!-- <form action="index.html">
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
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>