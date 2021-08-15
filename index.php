<?php
include "header.php";

include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="form">
        <h1>Welcome Back, <?php echo $_SESSION['username']; ?>!</h1>
        <h3>You are a one of loyal customer! Please Enjoy</h3>
        <h3><a href="homepage.php">Your Dashboard</a></h3>
        <a href="logout.php">Logout</a>

    </div>
</body>

</html>