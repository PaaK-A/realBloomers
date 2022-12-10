<?php 
include_once("../settings/core.php");
include("../controllers/product_contrroller.php");
include("../navbars/admin_menu.php");


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

    if($_SESSION["role"] == 1){ 
        // echo "Hello admin";
        $role= "ADMIN";
    }

    else{ 
        // echo "You are not ADMIN.";
        // $role= "User";
        // echo '<a href="l../login/login.php"">Login</a>';
		header("location: ../login/login.php");
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
	<title>Categories</title>

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
	<?php pageheader("Add Categories","Categories");?>
	<!-- end header -->

		<!-- error section -->
		<div class="product-section mt-100 mb-150">
			
			<div class="container">
				<div class="row">
					<!-- content wrapper div -->
					<div class="container-fluid">    
						<main id="main">
							<div>
								<!-- div for header and any other content to the right of it -->
								<div style="margin-bottom:20px">
									<header>
										<h2 >Categories</h2>
									</header>
								</div>

								

								<!-- actual content;i.e add form and table -->
								<div style="margin-bottom:50px">
									<form action="../actions/add_categoryprocess.php" method="POST">
										<div>
											<!--make Category text box--> 
											<div>
												<label for="productcategory">Category</label>
												<input type="text" id="productcategory" name="productcategory" placeholder="Category Name" required>
												<input type="submit" name="cat_submit" value="ADD">
											</div>
										</div>
									</form>
								</div>


								<!-- div for table  -->
								<div>
									<table class="table">
									
										<thead>
											<tr>
											
												<th scope="col" >
													Category Name
												</th>
												<th scope="col" >
													Edit
												</th>
												<th scope="col" >
													Delete
												</th>
											</tr>
										</thead>

										<tbody>

											<?php
												$selectall= selectAllCategories_ctr();
												
												foreach ($selectall as $row) 
												:
											?>

												<tr>
													
													<td>
														<?php echo $row['cat_name'];?>
													</td>
													<td>
														<a href="editcategory.php?id=<?php echo $row['cat_id']; ?>" class="edit">Edit</a>
													</td>
													<td>
														<a href="../actions/delete.php?cid=<?php echo $row['cat_id']; ?>" class="edit">Delete</a>
													</td>
												</tr>
											<?php endforeach;?>
										</tbody>
									</table>

								</div>	
							</div>

						</main>
					</div>
				</div>
			</div>
		</div>
		<!-- end error section -->
		
	<!-- footer -->
	
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