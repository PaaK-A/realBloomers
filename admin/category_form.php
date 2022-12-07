
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type = "text/javascript" src="../navbars/sidebar.js"></script>

<?php 
include("../controllers/product_contrroller.php");
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
                    <header>
                        <h2 >Categories</h2>
                    </header>
                </div>

                

                <!-- actual content;i.e add form and table -->
                <div>
                    <form action="../actions/add_categoryprocess.php" method="POST">
                        <div>
                            <!--make Category text box--> 
                            <div>
                                <label for="productcategory">Category</label>
                                <input type="text" id="productcategory" name="productcategory" placeholder="John" required>
                            </div>

                            
                        </div>

                        <input type="submit" name="cat_submit" value="ADD">
                    </form>
            

                </div>


                <!-- div for table  -->
                <div>
                    <table>
                     
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