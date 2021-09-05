<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rapid Retail Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>




    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Rapid Retail</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>




                <?php

                if (isset($_SESSION["user_id"])) {
                    //user is logged in

                ?>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>


                <?php


                } else {
                    //user is not logged in

                ?>


                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">Registration</a>
                    </li>

                <?php



                }


                ?>






            </ul>
        </div>
    </nav>
    <br>

    <h1>