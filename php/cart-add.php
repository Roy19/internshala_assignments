<?php
    require './includes/common.php';
    // get the item_id and add to cart
    $item_id = $_GET["id"];
    $user_id = $_SESSION["id"];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

    $query_result = mysqli_query($conn, $query);

    header("location: products.php");
?>