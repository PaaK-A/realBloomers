<?php
include_once "../controllers/product_contrroller.php";

$get_brandname= $_POST['brandname'];

// echo $get_brandname;

//check if brand name already exists 
$checkExists= selectABrandName_ctr($get_brandname);

if(empty($checkExists)){
    if(addBrand_ctr($get_brandname)){
        echo "Brand Added successfully.";
    }
    else{
        echo "Something Went Wrong. Try again later.";
    }
}
else{
    echo "Brand already exists.";
}
?>