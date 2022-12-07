<?php
// include("../settings/core.php");
//include_once "../controllers/product_contrroller.php";
include ("../controllers/cart_controller.php");

// Check if the user is logged in, if not then redirect him to login page
//if logged in check if admin, if not redirect to login page 

session_start();
/**get customer ID */
$getcustomerID= $_SESSION['cid'];

/**get product ID */
$getproductID= $_POST['pid'];

/**get quantity */
$getqty= $_POST['quantity'];

/**get IP address */
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}

/**get product quantity */
//$getqty= $_POST

// echo $getcustomerID;
// echo " PID:";
// echo $getproductID; 
// echo " IP";
// echo ($ipaddress);
// echo " QTY";
// var_dump( $getqty);

// $QTY=3;
// $IP=4;
if (checkExists_ctr($getcustomerID,$getproductID)>0){
    if ($getqty == NULL){
        $getqty=1;
        if(updateCartQty_ctr($getproductID,$getcustomerID,$getqty)){
            echo "Product already in cart. Qunatity updated.";
        }
        else{
            echo "Was not able to change product quantity in cart.";
        }
    }
    else{
        if(updateCartQty_ctr($getproductID,$getcustomerID,$getqty)){
            echo "Product already in cart. Qunatity updated.";
        }
        else{
            echo "Was not able to change product quantity in cart.";
        }
    }
}
else{
    if ($getqty == NULL){
        $getqty=1;
        //echo $getqty;
        if(addCart_ctr($getproductID,$ipaddress,$getcustomerID,$getqty) != NULL){
            // echo '<script>alertRedirect_view("Product Added","all_product.php")</script>';
            echo "Product added to cart successfully.";
        }
        else{
            // echo '<script>alertRedirect_view("Not Added To Cart","single_product.php?pid='.$getproductID.'")</script>';
            //echo "nah";
            echo "Product not added to cart. Pls login again.";
        }
    }
    else{
        if(addCart_ctr($getproductID,$ipaddress,$getcustomerID,$getqty) != NULL){
            // echo '<script>alertRedirect_view("Product Added","all_product.php")</script>';
            //echo "yh";
            echo "Product added to cart successfully.";
        }
        else{
            // echo '<script>alertRedirect_view("Not Added To Cart","single_product.php?pid='.$getproductID.'")</script>';
            //echo "nah";
            echo "Product not added to cart 2";
            echo "<br>";
            echo $getproductID;
            echo "<br>";
            echo $getqty;
            echo "<br>";
            echo $ipaddress;
            echo "<br>";
            echo $getcustomerID;
        }
    }
}

//echo $_SESSION['loggedin'];
?>