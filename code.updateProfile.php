<?php
session_start();
$user_id = $_SESSION["user_id"];
include "connection.php";
if (isset($_POST["updatebtn"])) {


    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email' WHERE user_id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION["alerts"] = "Updated your user information";
        header("location: profile.php");
        exit();
    } else {
        $_SESSION["alerts"] = "Error: unable to update your informtaion";
        header("location: profile.php");
        exit();
    }
} else if (isset($_POST["passbtn"])) {

    $password = $_POST["password"];
    //$password2 = $_POST["password"];

    $pass = password_hash($password, PASSWORD_DEFAULT);


    $sql = "UPDATE users SET password = '$pass' WHERE user_id = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION["alerts"] = "Password sucessfully changed";
        header("location: profile.php");
        exit();
    } else {
        $_SESSION["alerts"] = "Error: unable to update your password";
        header("location: profile.php");
        exit();
    }
} else {

    $_SESSION["alerts"] = "No update was done";
    header("location: profile.php");
    exit();
}
