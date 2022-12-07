<?php 
include("../../navbars/header.php");
include("../../product_contrroller.php");
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
	<?php pageheader("A little help never hurt","ADVICE");?>
	<!-- end header -->

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

			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap" hidden>
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advice -->

	<!-- footer -->
	<?php pagefooter();?>
	<!-- end footer -->
	
	
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