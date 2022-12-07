<script src="../js/displayadvice_fxn.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<?php 
// include("admin_nav.php"); 
include("../controllers/product_contrroller.php");
include("../functions/product_functions.php");
// include("admin_navbar.php");
// include("../navbars/admin_navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Advice</title>
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
                        <h2>Plant Care</h2>
                    </header>
                </div>

                

                <!-- contetn -->
                <div class="mb-5">

                   <!-- dropdown menu of products -->
                   <h5><label for="productname">Choose a Product:</label></h5>


                    <!-- value is productid -->
                    <select name="productname" id="productname" class="mb-4">
                    <?php get_allProducts_fxn();?>
                    </select>
                 
                    <!--make Category text box--> 
                    <div class="form-group">
                        <label for="adviceTextarea">Enter Plant Care Info here</label>
                        <textarea class="form-control" id="adviceTextarea" rows="3"></textarea>
                    </div>
                        
                

                    <input type="submit" name="advice_submit" value="ADD" onclick="addAdvice()">

                </div>


                <!-- div for table  -->
                <div id="content">
                    <span id="content">
                        
                        <!-- <script>displaybrands_fxn()</script> -->

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
                        
                    </span>
                </div>

                <!-- div for footer -->
        
                
            </div>

        </main>

              
    </div>

    <script src="https://kit.fontawesome.com/78711647c2.js" crossorigin="anonymous"></script>
    <!-- <script src="index.js" crossorigin="anonymous"></script> -->

 


    <script type="text/javascript">
        function addAdvice(){
            // alert ("this button is working.");
            
            $.ajax({
                type: 'POST',
                url: '../actions/add_adviceprocess.php',
                data:  {
                    productid: $('#productname').val(),
                    advice: $('#adviceTextarea').val(),
                } ,
                success: function(data,status) {
                    // alert('AJAX call was successful!');
                    //$('#content').html(data);
                    //alert(data);
                    //alert(status);
                    displayadvice_fxn();
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