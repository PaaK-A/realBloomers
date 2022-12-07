<script src="../js/js_fxns.js"></script>
<?php
include_once "../controllers/product_contrroller.php";



    $get_productcat=$_POST['productcat'];
    $get_productbrand=$_POST['pdtbrand'];
    $get_producttitle=$_POST['productTitle'];
    $get_productprice=$_POST['productPrice'];
    $get_productdescription=$_POST['productDescription'];
    // $get_productimage=$_POST['productImg'];
    $get_productkeywords=$_POST['productKeywords'];
    $imgtmp_name= $_FILES['productImg']['tmp_name'];
    $imgfile_name= $_FILES['productImg']['name'];
    //$folder= "../images/".$imgfile_name;
    $folder= "../images/".$imgfile_name;
    
    // var_dump($imgtmp_name);
    //echo $file;

    if(move_uploaded_file($imgtmp_name, $folder)){
        //echo "Image moved.";
        //echo $folder;
        if( addProduct_ctr($get_productcat,$get_productbrand,$get_producttitle, $get_productprice,$get_productdescription,$folder,$get_productkeywords) != NULL){
            echo '<script>alertRedirect_admin("Product Added Successfully.","products_form.php")</script>';
        }
        else{
            echo ("Record Not Added.");
        }
    }
    else{
        echo "Image not moved.";
        var_dump($imgfile_name);
        // echo $folder;
        // echo "<br>";
        // echo $imgtmp_name;
        // echo "<br>";
        // var_dump(move_uploaded_file($imgtmp_name, $folder));
    }
    
    
    


?>


