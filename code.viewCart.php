<?php


include "connection.php";

$sql = "SELECT * FROM cart, items WHERE cart.prod_id = items.prod_id AND cart.user_id = $user_id AND cart.cart_item_status = 'cart'";



$cart = null;
$subtotal = 0;
$total = 0;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


    $cart = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //echo "<pre>";
    //print_r($cart);
    //echo "</pre>";


    foreach ($cart as $key => $item) {
        $subtotal += $item["prod_price"];
    }
} else {
    //echo "0 results";
}

//echo "Your subtotal is $subtotal";
$total = $subtotal;
