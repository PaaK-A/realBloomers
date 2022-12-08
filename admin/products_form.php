
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type = "text/javascript" src="../navbars/sidebar.js"></script>

<?php 
include_once("../controllers/product_contrroller.php");
include("../functions/product_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="../navbars/sidebar.css">

</head>


<body>
    <div id="nav-placeholder"></div> 

    <!-- content wrapper div -->
    <div class="container-fluid" style="margin-top:60px">    

        <!-- Navigation bar -->
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

        <main id="main">
           <div id="sidenav-placeholder"></div>

            <div>
                <!-- div for header and any other content to the right of it -->
                <div>
                    <header class="mb-3">
                        <h2>Products</h2>
                    </header>
                </div>

                

                <!-- actual content;i.e add form and table -->
                <div>    
                   
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

                <!-- div for footer -->
                <div>

                </div>
                
            </div>

        </main>

              
    </div>

   

    <script src="https://kit.fontawesome.com/78711647c2.js" crossorigin="anonymous"></script>
    <!-- <script src="index.js" crossorigin="anonymous"></script> -->

    <script>
        $.get("../navbars/sideThree.html", function(data){
            $("#sidenav-placeholder").replaceWith(data);
        });
        $.get("../navbars/admin_navbar.php", function(data){
            $("#nav-placeholder").replaceWith(data);
        });
    </script>

</body>
</html>
