<?php
include_once "../controllers/product_contrroller.php";

if(selectAllBrands_ctr() != NULL){
    echo '<table class="w-full text-sm text-left text-gray-500" v-for="row in rows">
    <thead class="text-xs text-gray-700 uppercase odd:bg-white even:bg-gray-200">
        <tr class="">
           
            <th scope="col" class="py-3 px-6">
                Brand Name
            </th>
            <th scope="col" class="py-3 px-6">
                Edit
            </th>
            <th scope="col" class="py-3 px-6">
                Delete
            </th>
        </tr>
    </thead>'; 

    foreach(selectAllBrands_ctr() as $row){
        $brandname = $row['brand_name'];
        $brandid = $row['brand_id'];

        echo 
        '<tbody v-for="row in rows">

            <tr class="bg-white border-b odd:bg-white even:bg-gray-200 hover:bg-gray-600">
                
                <td class="py-4 px-6 ">
                    '.$brandname.'
                </td>
                <td class="py-4 px-6">
                    <a href="editBrand.php?bid='.$brandid.'" class="edit">Edit</a>
                </td>
                <td class="py-4 px-6">
                    <a href="../actions/delete.php?bid='.$brandid.'" class="edit">Delete</a>
                </td>
            </tr>
            
        </tbody>
   ';
    }

    echo ' </table>';
}
else{
    echo 'No Brands Exist.';
}
?>