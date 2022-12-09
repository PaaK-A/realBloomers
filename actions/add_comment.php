<?php
include_once "../controllers/product_contrroller.php";

    $get_productid=$_POST['pid'];
    $get_customerid=$_POST['cusid'];
    $get_commentusername=$_POST['username'];
    $get_commentcontent=$_POST['content'];

    // echo $get_commentcontent;

    if(addComment_ctr($get_productid,$get_customerid,$get_commentusername,$get_commentcontent)){
        echo "Comment Added successfully.";
    }
    else{
        echo "Something Went Wrong. Try again later.";
    }
?>