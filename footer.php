<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    .container-sm {
        max-width: 100%;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;
    }

    .footer {
        background: #000;
        color: #8a8a8a;
        font-size: 14px;
        padding: 60px 0 20px;
    }

    .footer p {
        color: #8a8a8a;
    }

    .footer h3 {
        color: #fff;
        margin-bottom: 20px;
    }

    .footer-col-1,
    .footer-col-2,
    .footer-col-3,
    .footer-col-4 {
        min-width: 250px;
        margin-bottom: 20px;
    }

    .footer-col-1 {
        flex-basis: 30%;
    }

    .footer-col-2 {
        flex: 1;
        text-align: center;
    }

    .footer-col-2 img {
        width: 180px;
        margin-bottom: 20px;
    }

    .footer-col-3,
    .footer-col-4 {
        flex-basis: 12%;
        text-align: center;
    }

    ul {
        list-style-type: none;
    }

    .app-logo {
        margin-top: 20px;
    }

    .app-logo img {
        width: 140px;
    }

    .footer hr {
        border: none;
        background: #b5b5b5;
        height: 1px;
        margin: 20px 0;
    }

    .copyright {
        text-align: center;
    }

    .menu-icon {
        width: 28px;
        margin-left: 20px;
        display: none;
    }

    /* Brands */

    * {
        box-sizing: border-box;
    }

    .brands {
        margin: 100px auto;
    }

    .col-5 {
        width: 100%;
    }

    .col-5 img {
        width: 20%;
        cursor: pointer;
        filter: grayscale(100%);
    }

    .col-5 img:hover {
        filter: grayscale(0);
    }
</style>


<body>

    <!-- Brands -->

    <div class="brands">
        <div class="container-sm">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-2.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-3.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-4.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-5.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-6.png">
                </div>

            </div>
        </div>
    </div>

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
</body>

</html>