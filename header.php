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
</head>


<style>
    art* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        display: flex;
        align-items: center;
        padding: 20px;

    }

    nav {
        flex: 1;
        text-align: right;

    }

    nav ul {
        display: inline-block;
        list-style-type: none;

    }

    nav ul li {
        display: inline-block;
        margin-right: 20px;
    }

    a {
        text-decoration: none;
        color: #555;

    }

    p {
        color: #555;

    }
</style>




<body>

    <div class="header">

        <div class="container">

            <div class="navbar">

                <div class="logo">

                    <a href="homepage.php"><img src="images/logo.png" width="150px"></a>
                </div>

                <nav>

                    <ul id="MenuItems">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="store.php">Products</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="myaccount.php">Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>


        </div>

    </div>
    <br>