<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<?php 
include("../controllers/product_contrroller.php");
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
	<title>Advice</title>

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
	<?php pageheader("Add Advice","Plant Care");?>
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
										<h2>Plant Care</h2>
									</header>
								</div>

								

								<!-- actual content;i.e add form and table -->
								<div style="margin-bottom:50px">
									
                                    <div>
                                        <!--make brand text box--> 
                                        <div>
                                            <!-- dropdown menu of products -->
                                            <h5><label for="productname">Choose a Product:</label></h5>


                                            <!-- value is productid -->
                                            <select name="productname" id="productname" class="mb-4">
                                            <?php get_allProducts_fxn();?>
                                            </select>
                                            <br>
                                            <label for="adviceTitle">Advice Title: </label>
                                            <input type="text" id="adviceTitle" name="adviceTitle" placeholder="Enter Title Here" required>

                                            <!--make Category text box--> 
                                            <div class="form-group">
                                                <label for="adviceTextarea">Enter Plant Care Info here</label>
                                                <textarea class="form-control" id="adviceTextarea" rows="10"></textarea>
                                            </div>
                                                


                                            <input type="submit" name="advice_submit" value="ADD" onclick="addAdvice()">
                                        </div>
                                    </div>
									
								</div>


								<!-- div for table  -->
								<div>
                                    <table class="table" style="width:100%">
                                        
                                        <thead>
                                            <tr>
                                            
                                                <th scope="col">
                                                    Plant
                                                </th>
                                                <th scope="col">
                                                    Advice
                                                </th>
                                                <th scope="col">
                                                    Edit
                                                </th>
                                                <th scope="col">
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                                $selectall= selectAllAdvice_ctr();
                                                
                                                foreach ($selectall as $row) 
                                                :
                                            ?>

                                                <tr>
                                                    
                                                    <td>
                                                        <?php 
                                                        $productid= $row['product_id'];
                                                        $pid=selectAProduct_ctr($productid);
                                                        $producttitle= $pid['product_title'];
                                                        echo $producttitle;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['productcare_info'];?>
                                                    </td>
                                                    <td>
                                                        <a href="editAdvice.php?aID=<?php echo $row['advice_id']; ?>" class="edit">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="../actions/delete.php?aID=<?php echo $row['advice_id']; ?>" class="delete">Delete</a>
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
	
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<!-- <script src="../assets/js/waypoints.js"></script> -->
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
    
    function addAdvice(){
        // alert ("this button is working.");
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '../actions/add_adviceprocess.php',
            data:  {
                productid: $('#productname').val(),
                advicetitle: $('#adviceTitle').val(),
                advice: $('#adviceTextarea').val(),
            } ,
            success: function(data,status) {
                // alert('AJAX call was successful!');
                //$('#content').html(data);
                //alert(data);
                //alert(status);
                // displayadvice_fxn();
                alert(data);
                window.location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                // alert("Error:"+xhr.status);
                // alert(thrownError);
                alert("An error occured. Please contact us.");
            }
        });
    }
</script>