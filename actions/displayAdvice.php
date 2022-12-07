<?php
include_once "../controllers/product_contrroller.php";

if(selectAllAdvice_ctr() != NULL){

    echo 
    '<table class="table" style="width:100%">
                              
        <thead>
            <tr>
            
                <th scope="col">
                    Plant
                </th>
                <th scope="col">
                    Advice
                </th>
                <th scope="col">
                    Edit
                </th>
                <th scope="col">
                    Delete
                </th>
            </tr>
        </thead>';
    
    foreach(selectAllAdvice_ctr() as $row){
        $productid= $row['product_id'];
        $pid=selectAProduct_ctr($productid);
        $producttitle= $pid['product_title'];
        $plantcare= $row['productcare_info'];
        $adviceid= $row['advice_id'];

        echo 
        '<tbody>

        <?php
            $selectall= selectAllAdvice_ctr();
            
            foreach ($selectall as $row) 
            :
        ?>

            <tr>
                
                <td>
                    '.$producttitle.'
                </td>
                <td>
                    '.$plantcare.'
                </td>
                <td>
                    <a href="editAdvice.php?aID='.$adviceid.'" class="edit">Edit</a>
                </td>
                <td>
                    <a href="../actions/delete.php?aID='.$adviceid.'" class="delete">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>';
    }


}
else{
    echo "No advice exists.";
}
?>