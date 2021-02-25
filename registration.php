<?php

//check if button was clicked
if (isset($_POST["registration"])) {

    include "connection.php";

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES (NULL, '$first_name', '$last_name', '$email', '$password', current_timestamp(), 'user');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
include "header.php"; ?>

<h1>Registration</h1>

<form action="registration.php" method="post">

    <p>First Name</p>
    <p><input type="text" name="first_name"></p>


    <p>Last Name</p>
    <p><input type="text" name="last_name"></p>


    <p>Email Address</p>
    <p><input type="text" name="email"></p>

    <p>Password</p>
    <p><input type="text" name="password"></p>

    <p><input type="submit" name="registration"></p>


</form>