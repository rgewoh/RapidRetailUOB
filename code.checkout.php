

<?php

//1 - check to see if the user is logged in
session_start();


if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    echo json_encode(['error' => 'user is not logged in']);
    exit();
}

//2 - cart info
include "code.viewCart.php";

//3 - cart subtotal and total

//4 - receipt code
$receipt_code = "abcde";

//5 - insert receipt
include "connection.php";

$sql = "INSERT INTO `receipts` (`receipt_id`, `receipt_code`, `user_id`, `receipt_subtotal`, `receipt_total`, `receipt_date`) 
VALUES (NULL, '$receipt_code', '$user_id', '$subtotal', '$total', current_timestamp());";

if (mysqli_query($conn, $sql)) {
    $receipt_id = mysqli_insert_id($conn);
    //echo "New record created successfully. Last inserted ID is: " . $receipt_id;
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





$sql = "";


if (!empty($cart)) {



    foreach ($cart as $item) {
        $item_id = $item["prod_id"];
        $cart_id = $item["cart_id"];
        $item_price = $item["prod_price"];
        $item_quantity = $item["purchase_prod_quantity"];


        //6 - insert purchases
        $sql .= "INSERT INTO `purchases` (`purchase_id`, `prod_id`, `purchase_prod_price`, `purchase_prod_quantity`, `purchase_date`, `receipt_id`) 
VALUES (NULL, '$item_id', '$item_price', '$item_quantity', current_timestamp(), '$receipt_id');";

        //7 - update cart
        $sql .= "UPDATE `cart` SET `cart_item_status` = 'purchased' WHERE `cart`.`cart_id` = $cart_id;";


        //8 - update stock


    } //end foreach

} else {
    //echo "Cart is empty";
    echo json_encode(['error' => 'Cart is empty']);
    exit();
}






if (mysqli_multi_query($conn, $sql)) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//9 - credit card payment
include "code.stripe2.php";
?>