<?php
    include "../controllers/customer_controller.php";

    $get_username= $_POST['username'];
    $get_cusemail= $_POST['email'];
    $get_cuspassword= password_hash($_POST['password'],PASSWORD_BCRYPT);
    $get_cuscountry= $_POST['country'];
    $get_cuscity= $_POST['city'];
    $get_tele= $_POST['telephone'];


    // echo "yess fr";
    // echo($get_username);
    // echo "<br>";
    // echo($get_cusemail);
    // echo "<br>";
    // echo($get_cuspassword);
    // echo "<br>";
    // echo($get_cuscountry);
    // echo "<br>";
    // echo($get_cuscity);
    // echo "<br>";
    // echo($get_tele);

    //check if user email already exists
    $checkExists= selectOneEmail_ctr($get_cusemail);

    //if doesnt exist add customer
    if(empty($checkExists)){
        if(addCustomer_ctr($get_username,$get_cusemail,$get_cuspassword,$get_cuscountry,$get_cuscity,$get_tele)){
            echo "Sign Up Successcful";
        }
        else{
            echo "Sign Up Faild";
        }
    }
    else{
        echo "Email already exists";
    }

?>