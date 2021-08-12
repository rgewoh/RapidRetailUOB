<?php

include "connection.php";



$cart = null;
$subtotal = 0;
$total = 0;




$sql = "SELECT * FROM cart, users, products 
WHERE cart.item_id = products.prod_id 
AND cart.user_id = users.user_id AND users.user_id = $user_id AND cart.cart_item_status = 'cart'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    $cart = mysqli_fetch_all($result, MYSQLI_ASSOC);


    foreach ($cart as $key => $prod) {
        $subtotal += $prod["prod_price"];
    }
} else {
    echo "0 results";
}

$total = $subtotal;

echo $subtotal;
