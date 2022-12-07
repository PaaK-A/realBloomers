<?php 
include_once("../controllers/cart_controller.php");
// include_once("../settings/core.php");

// session_start();
// $quantitynew= $_POST['newquantity'];
// $pid= $_POST['productid'];
// $customer_id=$_POST['cid'];

if (ISSET($_POST['update_btn'])){
    // echo "update_btn is set";
    // updateCartQty_ctr(25,32,20);
    // selectAllCart_ctr();
   if(updateCartQty_ctr(25,32,20)){
    echo "yes";
   }
   else{
    echo "no";
   }
}
// echo($quantitynew);
// echo ("<br>");
// echo ($pid);
// echo ("<br>");
// echo ($customer_id);

// if(checkExists_ctr($customer_id,$pid)>0){
//     echo "some";
// }
// else{
//     echo "nah";
// }
// echo (updateCartQty_ctr(17,13,20));

// if(updateCartQty_ctr($pid,$customer_id,$quantitynew)){
//     echo "Cart quantity updated.";
// }
// else{
//     echo "Cart quantity could not be updated."; 
// }

// if(isset($customer_id)){
//     //echo "username got";
//     if(isset($quantitynew) &&  isset($pid)){
//         // echo "pid and new qty and cid got.";
//         // echo($quantitynew);
//         // echo ($pid);
//         // echo ($customer_id);
//         if(updateCartQty_ctr($pid,$customer_id,$quantitynew)){
//             echo "Cart quantity updated.";
//         }
//         else{
//             echo "Cart quantity could not be updated. Please try again";
//         };
//     }
//     else{
//         echo "nada";
//     }
// }


?>
