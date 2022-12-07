<?php 
include_once("../controllers/cart_controller.php");

$quantitynew= $_POST['newquantity'];
$pid= $_POST['productid'];
$customer_id=$_POST['cid'];

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

if(updateCartQty_ctr($pid,$customer_id,$quantitynew)){
    echo "Cart quantity updated.";
}
else{
    echo "Cart quantity could not be updated."; 
}

?>
