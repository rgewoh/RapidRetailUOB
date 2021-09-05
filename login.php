<?php
session_start();





//check if a button named login was clicked
if (isset($_POST["login"])) {


    //connect to the database
    include "connection.php";

    //get information from input fields
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE users.email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "found email";

            //get information from the database
            $db_password = $row["password"];

            if (password_verify($password, $db_password)) {
                echo "Welcome";

                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["first_name"] = $row["first_name"];
                $_SESSION["last_name"] = $row["last_name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["user_type"] = $row["user_type"];

                header("location: homepage.php");
                exit();
            } else {
                echo "Please try again";
            }
        }
    } else {
        echo "Incorrect information";
    }
}




include "header.php"; ?>














<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #999;
            background: #fafafa;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            min-height: 41px;
            box-shadow: none;
            border-color: #e6e6e6;
        }

        .form-control:focus {
            border-color: #00c1c0;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 425px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin: 0 0 25px;
        }

        .signup-form form {
            margin-bottom: 15px;
            background: #fff;
            border: 1px solid #f4f4f4;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 40px 50px;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 14px;
        }

        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .signup-form .btn,
        .signup-form .btn:active {
            font-size: 16px;
            font-weight: bold;
            background: #00c1c0 !important;
            border: none;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #00b3b3 !important;
        }

        .signup-form a {
            color: #00c1c0;
            text-decoration: none;
        }

        .signup-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="signup-form">
        <form action="login.php" method="post">
            <h2>Sign In</h2>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>


            <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
            </div>
            <div class="hint-text small"><a href="#">Forgot Your Password?</a></div>
        </form>
        <div class="text-center">Join Us. <a href="registration.php">Register here</a></div>
    </div>
</body>

</html>
























<?php include "footer.php"; ?>