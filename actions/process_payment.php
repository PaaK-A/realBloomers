<?php

include '../controller/product_controller.php';

session_start();

$email = $_POST['email'];
$amount = $_POST['amount'];


$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' => $amount
  
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer sk_test_fc3e1bb2f57226329658275971eaa75a0f62f351",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);


//add payment and order

$cid = $_POST['cid'];
// $invoice_num=mt_rand(100000,999999);
$date = date("Y-m-d");
$status="Completed";
$amt = $_POST['amount'];
$invoice_num = $_POST['invoice'];


$order=insertOrder_ctr($cid,$invoice_num,$date,$status);

$selectorder=sel_order_ctr();
$oid=$selectorder['order_id'];

if ($order){
  if(insertPayment_ctr($amt,$cid,$oid,$date)){
    echo "Payment successful";
  }
  else{
    echo "Something went wrong with payment. Please try again.";
  }
}
else{
  echo "Something went wrong with order. Please try again.";
}
