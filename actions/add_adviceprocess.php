<?php
include_once "../controllers/product_contrroller.php";

$get_productID= $_POST['productid'];
$get_advice= $_POST['advice'];

// echo $get_brandname;

//check if brand name already exists 
$checkExists= selectACareInfo_ctr($get_advice);

if(empty($checkExists)){
    if(addAdvice_ctr($get_productID,$get_advice)){
        echo "Product Care Information Added successfully.";
    }
    else{
        echo "Something Went Wrong. Try again later.";
    }
}
else{
    echo "This particular Product Care information already exists.";
}
?>