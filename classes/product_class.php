<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*General class to handle all product functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class product_class extends db_connection{

    //--INSERT product--//
	public function addProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords){
		//write query
		
		$insertsql = "INSERT INTO products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$pcategory','$pbrand','$ptitle','$pprice','$pdescription','$pimage','$pkeywords')";
        
		//execute 	
		return $this -> db_query($insertsql);
	}

	//--SELECT All PRODUCTS--//
	public function selectAllProducts_cls(){
		//write query
		
		$selallsql = "SELECT * FROM products";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT A product--//
	public function selectAProduct_cls($productid){
		//write query
		
		$selsql = "SELECT * FROM products WHERE product_id= '$productid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	/*** 
	 SELECT products with same product category
	 limit to 3
	 **/
	public function selectSimilarProducts_cls($categoryid){
		//write query
		
		$selsql = "SELECT * FROM products WHERE product_cat='$categoryid' LIMIT 3";

		//execute 	
		return $this -> db_fetch_all($selsql);
	}

	//-update product--//
	public function updateProduct_cls($pcategory,$pbrand,$ptitle,$pprice,$pdescription,$pimage,$pkeywords,$productID){
		//write query
		
		$updatesql = " UPDATE products SET product_cat='$pcategory',product_brand ='$pbrand',product_title='$ptitle',product_price='$pprice',product_desc='$pdescription',product_image='$pimage',product_keywords='$pkeywords' WHERE product_id= '$productID' ";
		
		//execute 	
		//print $updatesql;
		return $this -> db_query($updatesql);
	}	

	//-search product--//
	public function searchProduct_cls($search_term){
		//write query
		
		$searchsql = " SELECT * FROM products WHERE product_title LIKE '%$search_term%' ";
		
		//execute 	
		//print $searchsql;
		return $this -> db_fetch_all($searchsql);
	}		

	/* 
	BRANDS
	*/

	//-INSERT brand--//
	public function addBrand_cls($brandname){
		//write query
		
		$insertsql = "INSERT INTO brands(brand_name) VALUES ('$brandname')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}
	
	//-update brand--//
	public function updateBrand_cls($editedbrand,$brandID){
		//write query
		
		$updatesql = " UPDATE brands SET brand_name='$editedbrand' WHERE brand_id= '$brandID' ";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($updatesql);
	}	

	//--SELECT All--//
	public function selectAllBrands_cls(){
		//write query
		
		$selallsql = "SELECT * FROM brands";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT--//
	public function selectABrand_cls($brandid){
		//write query
		
		$selsql = "SELECT * FROM brands WHERE brand_id= '$brandid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-SELECT BY BRAND NAME-//
	public function selectABrandName_cls($brandname){
		//write query
		
		$selsql = "SELECT * FROM brands WHERE brand_name= '$brandname'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//category

	//-INSERT category--//
	public function addCategory_cls($categoryname){
		//write query
		
		$insertsql = "INSERT INTO categories(cat_name) VALUES ('$categoryname')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}

	//--SELECT All categories--//
	public function selectAllCategories_cls(){
		//write query
		
		$selallsql = "SELECT * FROM categories";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT A Category--//
	public function selectACategory_cls($categoryid){
		//write query
		
		$selsql = "SELECT * FROM categories WHERE cat_id= '$categoryid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-SELECT BY CATEGORY NAME-//
	public function selectACategoryName_cls($categoryname){
		//write query
		
		$selsql = "SELECT * FROM categories WHERE cat_name= '$categoryname'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-update category--//
	public function updateCategory_cls($editedcategory,$categoryID){
		//write query
		
		$updatesql = "UPDATE categories SET cat_name='$editedcategory' WHERE cat_id= '$categoryID' ";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($updatesql);
	}

	/**ADVICE/
	 * PLANT CARE */

	
	//-INSERT advice--//
	public function addAdvice_cls($plantid,$careinfo){
		//write query
		
		$insertsql = "INSERT INTO advice(product_id,productcare_info) VALUES ('$plantid','$careinfo')";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($insertsql);
	}
	
	//-update advice--//
	public function updateAdvice_cls($editedplantid,$editedcareinfo,$adviceid){
		//write query
		
		$updatesql = " UPDATE advice SET product_id='$editedplantid' AND productcare_info='$editedcareinfo' WHERE advice_id='$adviceid' ";
        
		//execute 	
		//print $insertsql;
		return $this -> db_query($updatesql);
	}	

	//--SELECT All--//
	public function selectAllAdvice_cls(){
		//write query
		
		$selallsql = "SELECT * FROM advice";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT--//
	public function selectOneAdvice_cls($adviceid){
		//write query
		
		$selsql = "SELECT * FROM advice WHERE advice_id= '$adviceid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-SELECT BY Plant care info-//
	public function selectACareInfo_cls($careinfo){
		//write query
		
		$selsql = "SELECT * FROM advice WHERE productcare_info= '$careinfo'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}


	//-search care info--//
	public function searchAdvice_cls($search_term){
		//write query
		
		$searchsql = " SELECT * FROM advice WHERE productcare_info LIKE '%$search_term%' ";
		
		//execute 	
		//print $searchsql;
		return $this -> db_fetch_all($searchsql);
	}
	
	/**payment */

	 //new pay
	function insertpayment_cls($amt,$cid, $orderid,$paymentdate){
		$currency="GHC";
        $sql = "INSERT INTO payment (amt,customer_id,order_id,currency,payment_date) VALUES ('$amt','$cid','$orderid','$currency','$paymentdate')";
        return $this->db_query($sql);
    }

	/** order */ 
	function insertorder_cls($customerid,$invoicenum,$orderdate,$orderstatus){
        
        $sql = "INSERT INTO order (customer_id,invoice_no,order_date) VALUES ('$customerid','$invoicenum','$orderdate','$orderstatus')";
		return $this->db_query($sql);
	}

	function sel_order(){
        $sql = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
            
        return $this -> db_fetch_one($sql);
    }

}
?>