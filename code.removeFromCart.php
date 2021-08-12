<?php 

session_start ();


if (isset($_GET["id"])) {
    $prod_id = $_GET["id"];
} else {
    echo "no id in the url";
    exit();
}

include "connection.php";
include "code.isLoggedIn.php";

    // sql to delete a record
$sql = "DELETE FROM `cart` WHERE `cart`.`cart_id` = $prod_id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
