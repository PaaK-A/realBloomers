<?php 
include("../controllers/general_controller.php");

$categoryID=$_GET['cid'];
$brandID=$_GET['bid'];
$productID=$_GET['pid'];

// echo $categoryID;

if($categoryID){
    if(delete_ctr('categories','cat_id',$categoryID) != NULL){
        echo "deleted";
        // echo '<script>alertRedirect_view("Product Deleted","cart.php")</script>';
        header("location: ../admin/category_form.php");
    }
    else{
        echo "Not Deleted";
    }
}
else if($brandID){
    if(delete_ctr('brands','brand_id',$brandID) != NULL){
        echo "deleted";
        // echo '<script>alertRedirect_view("Product Deleted","cart.php")</script>';
        header("location: ../admin/brand_form.php");

    }
    else{
        echo "Not Deleted";
    } 
}
else if($productID){
    if(delete_ctr('products','product_id',$productID)!= NULL){
        echo "deleted";
        // echo '<script>alertRedirect_view("Product Deleted","cart.php")</script>';
        header("location: ../admin/products_form.php");
    }
}
else{
    echo "Unable to perform delete function right now. Please try again later.";
}
?>