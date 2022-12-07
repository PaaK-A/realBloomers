<?php include("../controllers/product_controller.php"); 


$cid = $_GET['cid'];
// $invoice_num=mt_rand(100000,999999);
$date = date("Y-m-d");
$status="Completed";
$amt = $_GET['amt'];
$invoice_num = $_GET['invoice'];




$order=insertOrder_ctr($cid,$invoice_num,$date,$status);

$selectorder=sel_order_ctr();
$oid=$selectorder['order_id'];

if ($order){
    insertPayment_ctr($amt,$cid,$oid,$date);
}
else{
    echo "Something went wrong. Please try again.";
}
?>