<?php
    function check_if_added_to_cart($item_id){
        // check if a given ite with item_id is added to cart
        require 'common.php';
        $user_id = $_SESSION["id"];
        $query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id' AND status = 'Added to cart'";
        
        $query_result = mysqli_query($conn, $query);
        if(mysqli_num_rows($query_result) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>