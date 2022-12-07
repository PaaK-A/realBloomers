<script src="../js/displaybrands_fxn.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<?php 
// include("admin_nav.php"); 
include("../controllers/product_contrroller.php");
// include("admin_navbar.php");
// include("../navbars/admin_navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand</title>
    <!-- <link rel="stylesheet" href="output.css"> -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type = "text/javascript" src="../navbars/sidebar.js"></script>
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
                <div>
                    <header>
                        <h2>Brands</h2>
                    </header>
                </div>

                

                <!-- contetn -->
                <div>
                   
                    <div>
                        <!--make Category text box--> 
                        <div>
                            <label for="productbrand">Brand</label>
                            <input type="text" id="product_brand" name="productbrand" placeholder="" required>
                        </div>

                        
                    </div>

                    <input type="submit" name="brand_submit" value="ADD" onclick="addBrand()">
                   
            

                </div>


                <!-- div for table  -->
                <div id="content">
                    <span id="content">
                        
                        <!-- <script>displaybrands_fxn()</script> -->

                         <!-- div for table  -->
                        <div>
                            <table>
                              
                                <thead>
                                    <tr>
                                    
                                        <th scope="col">
                                            Brand Name
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
                                        $selectall= selectAllBrands_ctr();
                                        
                                        foreach ($selectall as $row) 
                                        :
                                    ?>

                                        <tr>
                                            
                                            <td>
                                                <?php echo $row['brand_name'];?>
                                            </td>
                                            <td>
                                                <a href="editBrand.php?bid=<?php echo $row['brand_id']; ?>" class="edit">Edit</a>
                                            </td>
                                            <td>
                                                <a href="../actions/delete.php?bid=<?php echo $row['brand_id']; ?>" class="delete">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>

                        </div>
                        
                    </span>
                </div>

                <!-- div for footer -->
        
                
            </div>

        </main>

              
    </div>

    <script src="https://kit.fontawesome.com/78711647c2.js" crossorigin="anonymous"></script>
    <!-- <script src="index.js" crossorigin="anonymous"></script> -->

 


    <script type="text/javascript">
        function addBrand(){
            // alert ("this button is working.");
            
            $.ajax({
                type: 'POST',
                url: '../actions/add_brandprocess.php',
                data:  {
                    brandname: $('#product_brand').val(),
                } ,
                success: function(data,status) {
                    // alert('AJAX call was successful!');
                    //$('#content').html(data);
                    //alert(data);
                    //alert(status);
                    displaybrands_fxn();
                    alert(data);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert("Error:"+xhr.status);
                    alert(thrownError);
                }
            });
        }
    </script>

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