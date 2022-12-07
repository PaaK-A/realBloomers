<script src="../js/js_fxns.js"></script>

<?php
include_once "../controllers/product_contrroller.php";

if(ISSET($_POST['cat_submit'])){
    // $get_category= $_POST['category'];
    $get_category=$_POST['productcategory'];

    //echo $get_category;
    // var_dump("yes fr");


    //check if category name already exists 
    $checkExists= selectACAtegoryName_ctr($get_category);

    if(empty($checkExists)){
        if(addCategory_ctr($get_category)){
            //echo "Category Added.";
            echo '<script>alertRedirect_admin("Category Added","category_form.php")</script>';
        }
        else{
            echo "Category not added.";
        }
    }
    else{
        echo "Category already exists.";
    }
}
?>

