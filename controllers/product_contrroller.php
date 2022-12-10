<?php
//connect to the user account class
include("../classes/product_class.php");

/*
PRODUCTS 
*/

//--INSERT product cls--//
function addProduct_ctr($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords){
    $addItem= new product_class();

    return $addItem->addProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords);
    
}

//--SELECT ALL PRODUCTS--//
function selectAllProducts_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllProducts_cls();
    
}

//--SELECT A Product--//
function selectAProduct_ctr($productid){
    $selectAProduct= new product_class();

    return $selectAProduct->selectAProduct_cls($productid);
    
}

//--selct similar products--//
function selectSimilarProducts_ctr($categoryID){
    $selectsql= new product_class();

    return $selectsql->selectSimilarProducts_cls($categoryID);
    
}

//--SELECT Products limit/
function selectProductsLimit_ctr(){
    $selectsql= new product_class();

    return $selectsql->selectProductsLimit_cls();
    
}

//--update product cls--//
function updateProduct_ctr($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID){
    $updateItem= new product_class();

    return $updateItem->updateProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID);
}

//--search product cls--//
function searchProduct_ctr($searchproduct_term){
    $searchItem= new product_class();

    return $searchItem->searchProduct_cls($searchproduct_term);
}

/*  
BRANDS
*/

//--INSERT brand cls--//
function addBrand_ctr($a){
    $addItem= new product_class();

    return $addItem->addBrand_cls($a);
}

//--update brand cls--//
function updateBrand_ctr($editedbrand,$brandID){
    $updateItem= new product_class();

    return $updateItem->updateBrand_cls($editedbrand,$brandID);
}

//--SELECT ALL--//
function selectAllBrands_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllBrands_cls();
    
}

//--SELECT--//
function selectABrand_ctr($brandid){
    $selectAll= new product_class();

    return $selectAll->selectABrand_cls($brandid);
    
}


//--SELECT BY BRAND NAME--//
function selectABrandName_ctr($brandName){
    $selectName= new product_class();

    return $selectName->selectABrandName_cls($brandName);
    
}

//category 

//--INSERT category cls--//
function addCategory_ctr($catname){
    $addItem= new product_class();

    return $addItem->addCategory_cls($catname);
}

//--SELECT ALL categories--//
function selectAllCategories_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllCategories_cls();
    
}

//--SELECT A Category--//
function selectACategory_ctr($categoryid){
    $selectAll= new product_class();

    return $selectAll->selectACategory_cls($categoryid);
    
}

//--SELECT BY CATEGORY NAME--//
function selectACategoryName_ctr($categoryName){
    $selectName= new product_class();

    return $selectName->selectACategoryName_cls($categoryName);
    
}

//--update catgeory cls--//
function updateCategory_ctr($editedcategory,$categoryID){
    $updateItem= new product_class();

    return $updateItem->updateCategory_cls($editedcategory,$categoryID);
}


/*
ADVICE 
*/

//--INSERT product cls--//
function addAdvice_ctr($plantID,$adviceTitle,$careInfo){
    $addItem= new product_class();

    return $addItem->addAdvice_cls($plantID,$adviceTitle,$careInfo);
    
}

//--update brand cls--//
function updateAdvice_ctr($editedplantID,$editedCareInfo,$adviceID){
    $updateItem= new product_class();

    return $updateItem->updateAdvice_cls($editedplantID,$editedCareInfo,$adviceID);
}

//--SELECT ALL--//
function selectAllAdvice_ctr(){
    $selectAll= new product_class();

    return $selectAll->selectAllAdvice_cls();
    
}

//--SELECT--//
function selectOneAdvice_ctr($adviceID){
    $selectAll= new product_class();

    return $selectAll->selectOneAdvice_cls($adviceID);
    
}

//--SELECT Products limit/
function selectLatestAdvice_ctr(){
    $selectsql= new product_class();

    return $selectsql->selectLatestAdvice_cls();
    
}


//--SELECT BY PLANT CARE INFO--//
function selectACareInfo_ctr($careInfo){
    $selectName= new product_class();

    return $selectName->selectACareInfo_cls($careInfo);
    
}


//--search product cls--//
function searchAdvice_ctr($searchproduct_term){
    $searchItem= new product_class();

    return $searchItem->searchAdvice_cls($searchproduct_term);
}

//--INSERT payment--//
function insertPayment_ctr($paymentAmount,$customerID,$orderID,$paymentDate){
    $addItem= new product_class();

    return $addItem->insertPayment_cls($paymentAmount,$customerID,$orderID,$paymentDate);
    
}

// insert order controller using insert order class variables
function insertOrder_ctr($customerID,$invoiceNum,$orderDate,$orderStatus){
    $addItem= new product_class();

    return $addItem->insertOrder_cls($customerID,$invoiceNum,$orderDate,$orderStatus);
    
}

function sel_order_ctr(){
    $order_id = new product_class();

    return $order_id -> sel_order();
}

/**comments */

//-INSERT comments--//
function addComment_ctr($product_ID,$customer_ID,$Username,$Content){
    $addItem= new product_class();

    return $addItem->addComment_cls($product_ID,$customer_ID,$Username,$Content);
    
}

//--SELECT ALL--//
function selectAllComments_ctr($product_ID){
    $selectAll= new product_class();

    return $selectAll->selectAllComments_cls($product_ID);
    
}
?>