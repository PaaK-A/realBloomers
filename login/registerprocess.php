<?php
include "../controllers/customer_controller.php";


    //collecting form data
    if(ISSET($_POST['registerinfo'])){
        $get_fname= $_POST['u_name'];
        $get_cusemail= $_POST['cusemail'];
        $get_cuspassword= password_hash($_POST['cuspassword'],PASSWORD_BCRYPT);
        $get_cuscountry= $_POST['cuscountry'];
        $get_cuscity= $_POST['cuscity'];
        $get_tele= $_POST['tele'];
        

        if(addCustomer_ctr($get_fname,$get_cusemail,$get_cuspassword,$get_cuscountry,$get_cuscity,$get_tele)){
            //echo "Information added."; 
            header("Location: login.php");
            exit();
        }
        else{
            echo "nah";
        }
        //echo("Here");
        //echo $get_fname;
        //echo $get_tele; 
         
        //print_r($this);

        // 
    }

  
    
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action= "register.php" method="POST">
        <input type="submit" name="register" value="Sign Up">
        </form>

    </body>