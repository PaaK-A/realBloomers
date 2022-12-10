<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type = "text/javascript" src="../navbars/sidebar.js"></script>

<?php 
include_once("../controllers/product_contrroller.php");
include("../navbars/admin_menu.php");
include("../functions/product_functions.php");
include_once("../settings/core.php");

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
	<title>Add Product</title>

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
	<?php pageheader("Add Products","Products");?>
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
										<h2 >Products</h2>
									</header>
								</div>

								

								<!-- actual content;i.e add form and table -->
								<div style="margin-bottom:50px">
                                    <form action= "../actions/add_product.php" method="POST" enctype="multipart/form-data">
                                        
                                        <!-- dropdown menu of categories -->
                                        <h5><label for="productcat">Choose a category:</label></h5>


                                        <!-- value is categoryid -->
                                        <select name="productcat" id="productcategory" class="mb-4">
                                        <?php get_allCategories_fxn();?>
                                        </select>
                                        
                                        
                                        
                                        <!-- dropdown menu of brand -->
                                        <h5><label for="pdtbrand">Choose a brand:</label></h5>

                                        <!-- value is brandid -->
                                        <select name="pdtbrand" id="productbrand" class="mb-4">
                                        <?php get_allBrands_fxn();?>
                                        </select>

                                        <!-- create title form. -->
                                        <h5>Title</h5>
                                        <input type="text" name="productTitle" placeholder="Enter Title" id="producttitle" class="mb-4" required> 

                                        <!--make Price text box--> 
                                        <h5>Price</h5>
                                        <input type="text" name="productPrice" placeholder="Enter Price" id="productprice" class="mb-4" required>  

                                        <!--make description text box--> 
                                        <h5>Description</h5>
                                        <textarea name="productDescription" placeholder="Enter Description" rows="5" id="productdescription" class="form-control mb-4"></textarea>
                                        
                                        <!--make image text box--> 
                                        <h5>Product Image</h5>
                                        <label for="img">Select image:</label>
                                        <input type="file" id="img" name="productImg" class="mb-4" accept="image/*">

                                        <!--make keywords text box--> 
                                        <h5>Keywords</h5>
                                        <textarea name="productKeywords" placeholder="Enter Keywords" id="keywords" rows="5" class="form-control"></textarea>

                                        <br>

                                        <!--submit button-->
                                        <input type="submit" name="productinfo" value="Add" class="mb-5">
                                    </form>    
								</div>


								<!-- div for table  -->
								<div>
                                    <table class="table" style="width:100%">
                                        <!-- <caption>Products Table</caption> -->
                                        <thead>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                            <th colspan="2">Action</th>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $selectall= selectAllProducts_ctr();
                                                
                                                foreach ($selectall as $row) 
                                                :
                                            ?>
                                                
                                            <tr>
                                                <td><?php echo $row['product_title']; ?></td>

                                                <td><?php echo $row['product_price']; ?></td>

                                                <td><?php echo $row['product_desc']; ?></td>

                                                <td><?php echo $row['product_image']; ?></td>

                                                <td>
                                                    <a href="editproduct_form.php?id=<?php echo $row['product_id']; ?>" class="edit">Edit</a>
                                                    <a href="../actions/delete.php?pid=<?php echo $row['product_id']; ?>" class="delete">Delete</a>

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
</html