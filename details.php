<?php


if (isset($_GET["id"])) {
    $prod_id = $_GET["id"];
} else {
    echo "no id in the url";
    exit();
}

include "connection.php";

$sql = "SELECT * FROM `products` WHERE prod_id = $prod_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        $prod_id = $row["prod_id"];
        $prod_title = $row["prod_title"];
        $prod_image = $row["prod_image"];
        $prod_desc = $row["prod_desc"];
        $prod_price = $row["prod_price"];
        $link = "code.addtocart.php?id=$prod_id";
    }
} else {
    echo "0 results";
}


include "header.php"; ?>

<h1>Details</h1>

<?php echo "$prod_title"; ?>







<style>
    /* Single Product Details */

    .single-product {
        margin-top: 80px;
    }

    .single-product .col-2 img {
        padding: 0;
    }

    .single-product .col-2 img {
        padding: 20px;
    }

    .single-product h4 {
        margin-top: 20px 0;
        font-size: 22px;
        font-weight: bold;
    }

    .single-product select {
        display: block;
        padding: 10px;
        margin-top: 20px;
    }

    .single-product input {
        width: 50px;
        height: 40px;
        padding-left: 10px;
        font-size: 20px;
        margin-right: 10px;
        border: 1px solid #ff523b;
    }

    input:focus {
        outline: none;
    }

    .single-product .fa {
        color: #ff523b;
        margin-left: 10px;
    }

    .small-img-row {
        display: flex;
        justify-content: space-between;
    }

    .small-img-col {
        flex-basis: 24%;
        cursor: pointer;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Deatils at Rapid Retail</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">

        <div class="navbar">

            <div class="logo">

                <img src="images/logo.png" width="150px">
            </div>

            <nav>
                <ul id="MenuItems">
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Account</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Single Product Details -->

    <div class="conatiner-sm single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/product-5.jpg" width="60%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/product-5.jpg" width="60%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-5-1.jpg" width="60%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-5-2.jpg" width="60%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/product-5-3.jpg" width="60%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Major White / Range</p>
                <h1>Frigidaire FFEF3054TS 30 Inch Electric Freestanding Range</h1>
                <h4>$8999.00</h4>
                <select>
                    <option>Select Delivery Option</option>
                    <option>Same Day</option>
                    <option>Next Day</option>
                    <option>Future Delivery</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>

                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p> • 5.3 Cu. Ft Self Cleaning Oven <br>
                    • 5 Elements / 6 in. - 12 in. / 100 - 3000 Watts <br>
                    • Even Baking Technology / Keep Warm Zone <br>
                    • Dimensions (WHD): 30 X 47.8 X 28.4 in.
                </p>
            </div>
        </div>
    </div>

    <!-- Title -->
    <div class="container-sm">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>

    <div class="container-sm">

        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Frigidaire FFEF3054TS 30 Inch Electric Freestanding Range with 5 Elements, Smoothtop Cooktop, 5.3
                    cu. ft. Primary Oven Capacity, in Stainless Steel</h4>
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
                <img src="images/product-6.jpg">
                <h4>Cuisinart TOA-60BKS Convection Toaster Oven Airfryer, Black Stainless Steel</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$1399.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg">
                <h4>Sauder Palladia Armoire, Select Cherry finish</h4>
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
                <img src="images/product-8.jpg">
                <h4>Decok Vanity Desk with 5 Drawers & Cushioned Stool, Black Makeup Vanity with Adjustable HD Mirror &
                    Removable Makeup Organizer, for Corner Bedroom</h4>
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

    </div>

    <!-- Footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>App Available for Android and IOS.</p>
                    <div class="app-logo">
                        <img src="images/playstore.png">
                        <img src="images/appstore.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png">
                    <p>We Work Towards Providing The Best Products And Customer Service Affordable!</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate Program</li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 - Randall Howe SN2018271</p>
        </div>
    </div>


    <!-- Menu -->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- js for product gallery -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>

</body>

</html>










<?php include "footer.php"; ?>