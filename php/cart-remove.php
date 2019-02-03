<?php
    require './includes/common.php';
    $user_id = $_SESSION["id"];
    $item_id = $_GET["id"];
    $query = "DELETE FROM users_items WHERE user_id = '$user_id' AND item_id = '$item_id'";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    header("location: cart.php");
?>