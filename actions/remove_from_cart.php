<?php 
include_once("../controllers/cart_controller.php");

    $productID=$_POST['pid'];
    $customerID=$_POST['cid'];

    // echo $productID;
    // echo "SPACE";
    // echo $customerID;

    if($productID){
        if(deleteCart_ctr($productID,$customerID) != NULL){
            echo "Product removed from cart.";
        }
        else{
            echo "Product cannot be removed from cart right now.Please try again later.";
        }
    }
?>

