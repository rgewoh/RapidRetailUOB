<?php
session_start();


if (isset($_SESSION["user_id"])) {

    $first_name = $_SESSION["first_name"];
    $last_name = $_SESSION["last_name"];


    echo "$first_name $last_name";
} else {
    echo "Please Log In";
}

include "header.php"; ?>

<title>Home Page</title>

<style>
    .container-sm {
        max-width: 1500px;
        margin: auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-2 {
        flex-basis: 50%;
        min-width: 400px;
    }

    .col-2 img {
        max-width: 300%;
        padding: 40px 20px;
    }

    .col-2 h1 {
        font-size: 50px;
        line-height: 60px;
        margin: 25px 0;
    }

    .btn {
        display: inline-block;
        background: #ff523b;
        color: white;
        padding: 8px 30px;
        margin: 30px 0;
        border-radius: 30px;
        transition: backgroun 0.5s;
    }

    .btn:hover {
        background: #563434;
    }

    .header {
        background: radial-gradient(#fff, #d6e0ff);
    }

    .header .row {
        margin-top: 70px;
    }

    .categories {
        margin: 70px 0;
    }

    .col-3 {
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
    }

    col-3 img {
        width: 100%;
    }

    .container-sm {
        max-width: 100%;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .col-4 {
        flex-basis: 15%;
        padding: 10.px;
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }

    .col-4 img {
        width: 70%;

    }

    .title {
        text-align: center;
        margin: 0 auto 80px;
        position: relative;
        line-height: 60px;
        color: #555;
    }

    .title::after {
        content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    h4 {
        color: #555;
        font-weight: normal;
    }

    .col-4 p {
        font-size: 14px;
    }

    .rating .fa {
        color: gold;
    }

    .col-4:hover {
        transform: translateY(-5px);
    }

    /* Offer */

    .offer {
        background: radial-gradient(#fff, #ffd6d6);
        margin-top: 80px;
        padding: 30px 0;
    }

    .col-2 .offer-img {
        padding: 50px;
    }

    small {
        color: #555;
    }

    .testimonial {
        padding-top: 100px;
    }

    .testimonial .col-3 {
        text-align: center;
        padding: 40px 20px;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.5s;
    }

    .testimonial .col-3 img {
        width: 50px;
        margin-top: 20px;
        border-radius: 50%;
    }

    .testimonial .col-3:hover {
        transform: translateY(-10px);
    }

    .fa.fa-quote-left {
        font-size: 34px;
        color: #ff523b;
    }

    .col-3 p {
        font-size: 20px;
        margin: 12px 0;
        color: #777;
    }

    .testimonial .col-3 h3 {
        font-weight: 600;
        color: #555;
        font-size: 24px;
    }

    /* text on image */
    .centered {
        color: #fff;
        font-size: 40px;
        font-weight: 450;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-70%, -40%);
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="row">

        <div class="col-2">
            <h1>Get the Best Buys Here!</h1>
            <p> You buy it we deliver it in no matter the timeframe needed!</p>
            <a href="store.php" class="btn">Explore Now &#8594;</a>
        </div>

        <div class="col-2">
            <img src="images/image1.png" width="600px">

        </div>
    </div>

    <!-- Categories -->

    <div class="categories">
        <div class="container-sm">

            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" width="80%">
                    <div class="centered">Computers</div>
                </div>

                <div class="col-3">
                    <img src="images/category-2.jpg" width="80%">
                    <div class="centered">Large Appliances</div>
                </div>

                <div class="col-3">
                    <img src="images/category-3.jpg" width="80%">
                    <div class="centered">Furniture</div>
                </div>

            </div>

        </div>
    </div>


    <!-- Featured Products Title -->

    <div class="container-sm">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="details.php"><img src="images/product-1.png"></a>
                <a href="details.php">
                    <h4>SAMSUNG Galaxy S20 FE 5G Factory Unlocked Android Cell Phoney</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$5479.00</p>
            </div>
            <div class="col-4">
                <a href="details.php"><img src="images/product-2.png"></a>
                <a href="details.php">
                    <h4>LG 65" 4K Smart UHD NanoCell TV (2021)</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$3599.00</p>
            </div>
            <div class="col-4">
                <a href="details.php"><img src="images/product-3-1.png"></a>
                <a href="details.php">
                    <h4>HONBAY Reversible Sectional Sofa Couch Set</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$7999.00</p>
            </div>
            <div class="col-4">
                <a href="details.php"><img src="images/product-4-1.png"></a>
                <a href="details.php">
                    <h4>Frigidaire EFR751, 2 Door Apartment Size Refrigerator</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$9999.00</p>
            </div>
        </div>
    </div>


    <!-- Latest Products -->

    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="details.php"><img src="images/product-5.png"></a>
            <a href="details.php">
                <h4>Frigidaire FFEF3054TS 30 Inch Electric Freestanding Range</h4>
            </a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>$8999.00</p>
        </div>
        <div class="col-4">
            <a href="details.php"><img src="images/product-6.png"></a>
            <a href="details.php">
                <h4>Cuisinart TOA-60BKS Convection Toaster Oven Airfryer</h4>
                <div class="rating">
            </a>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$1399.00</p>
    </div>
    <div class="col-4">
        <a href="details.php"><img src="images/product-7.png"></a>
        <a href="details.php">
            <h4>Sauder Palladia Armoire, Select Cherry finish</h4>
        </a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$2199.00</p>
    </div>
    <div class="col-4">
        <a href="details.php"><img src="images/product-8.jpg"></a>
        <a href="details.php">
            <h4>Decok Vanity Desk with 5 Drawers & Cushioned Stool</h4>
        </a>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$899.00</p>
    </div>
    </div>


    <!-- Offer -->


    <div class="offer">
        <div class="container-sm">
            <div class="row">
                <div class="col-2">
                    <a href="details.php"><img src="images/exclusive.png" class="offer-img"></a>
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Rapid Retail</p>
                    <h1>COMFEE' Portable Washing Machine</h1>
                    <small>0.9 cu.ft Compact Washer With LED Display, 5 Wash Cycles, 2 Built-in Rollers, Space Saving
                        <br> Washer, Ideal Laundry for RV, Dorm, Apartment, Magnetic Gray</small> <br>
                    <a href="login.php" class="btn">BUY NOW &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials -->


    <div class="testimonial">
        <div class="container-sm">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>This machine has been AMAZING. I live in a small one bedroom apartment with no washer dryer hook
                        ups. So this worked perfect for me.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>Justin Finch</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>What a great little washer. The delivery was prompt, setup was easy. I had a load going within an
                        hour of receiving it. It's attractive and really so simple to operate.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>Serah Connor</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>I chose this washer as a replacement for my Haier portable. After 9 years of working fine, the
                        electronics died in the Haier. But this made a perfect switch.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/user-3.png">
                    <h3>Marissa Swann</h3>
                </div>
            </div>
        </div>
    </div>



</body>

</html>



<?php include "footer.php"; ?>