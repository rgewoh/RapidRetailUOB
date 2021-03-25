<?php

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    echo "no user found";
    //header("location: login.php");
    exit();
}
