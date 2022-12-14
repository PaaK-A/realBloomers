<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*General class to handle all cart functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class cart_class extends db_connection{

    //--INSERT into cart--//
	public function addtoCart_cls($productid,$ipaddress,$customerid,$qty){
		//write query
		
		$insertsql = "INSERT INTO cart(p_id,ip_add,c_id,qty) VALUES ('$productid','$ipaddress','$customerid','$qty')";
        
		//execute 	
		return $this -> db_query($insertsql);
	}

	//--SELECT All from cart--//
	public function selectAllCart_cls(){
		//write query
		
		$selallsql = "SELECT * FROM cart";

		//execute 	
		return $this -> db_fetch_all($selallsql);
	}

	//--SELECT one from Cart--//
	public function selectACart_cls($productid){
		//write query
		
		$selsql = "SELECT * FROM cart WHERE p_id= '$productid'";

		//execute 	
		return $this -> db_fetch_one($selsql);
	}

	//-update cart--//
	public function updateCartQty_cls($productid,$customerid,$qty){
		//write query
		
		$updatesql = " UPDATE cart SET qty='$qty' WHERE p_id= '$productid' AND c_id= '$customerid'";
		
		//execute 	
		// echo $updatesql;
		return $this -> db_query($updatesql);
	}	

    /**DELETE CART */
    public function deleteCart_cls($productID,$customerID){
        //write query
        $delsql= "DELETE FROM cart WHERE p_id= '$productID' AND c_id= '$customerID'";

        //execute
        return $this -> db_query($delsql);
    }

    /**COUNT total PRODUCTS IN CART */
    public function countCart_cls($customerid){
        $countsql = "SELECT * FROM cart WHERE c_id='$customerid' ";

        //execute
        return $this -> db_count_one($countsql); 
 
    }

    /**check if product exists IN CART */
    public function checkExists_cls($customerid,$productid){
        $countsql = "SELECT * FROM cart 
        WHERE c_id='$customerid' AND p_id='$productid' ";

        //execute
        //print $countsql;
        return $this -> db_count_one($countsql); 
    }

	//-search cart--//
	// public function searchCart_cls($search_term){
	// 	//write query
		
	// 	$searchsql = " SELECT * FROM cart WHERE product_title LIKE '%$search_term%' ";
		
	// 	//execute 	
	// 	//print $searchsql;
	// 	return $this -> db_fetch_all($searchsql);
	// }		

}
?>