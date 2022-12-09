<?php 
include_once("../controllers/product_contrroller.php");
include_once("../controllers/customer_controller.php");
include("../navbars/header.php");
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

$getcustomerid=$_SESSION['cid'];
$customer= selectACustomer_ctr($getcustomerid);
// echo $getcustomerid;
$getadviceID= $_GET['aid'];
$advice=selectOneAdvice_ctr($getadviceID);
$productid= $advice['product_id'];
$selectproduct=selectAProduct_ctr($productid);
$keywords=$selectproduct['product_keywords'];
$keywordsarray = explode(" ", $keywords);
// $productcatid=$selectoneP['product_cat'];
// $selectcat= selectACategory_ctr($productcatid);
// $category_name=$selectcat['cat_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single News</title>

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
    <?php pageheader("read the deatils","Article")?>
	<!-- end header  -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<div><img src=<?php echo $selectproduct['product_image'];?>></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i><?php echo $advice['date'];?></span>
							</p>
							<h2><?php echo $advice['productcare_title']; ?></h2>
							<p><?php echo $advice['productcare_info']; ?></p>
						</div>

						

						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
                                <?php foreach(selectLatestAdvice_ctr() as $advice):?>
								<li><a href="single_advice.php?aid=<?php echo $advice['advice_id'];?>"><?php echo $advice['productcare_title'];?></a></li>
                                <?php endforeach;?>
							</ul>
						</div>
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
                                <?php foreach($keywordsarray as $keyword):?>
								<li><a href="../single-news.html"><?php echo $keyword;?></a></li>
                                <?php endforeach;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->


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
    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/78711647c2.js" crossorigin="anonymous"></script>

</body>
</html>

<script>
   
    
  </script>
