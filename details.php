<?php
session_start();



if (isset($_GET["id"])) {

    $item_id = $_GET["id"];
    $page = "details.php?id=$item_id";
} else {

    echo "No ID in the URL";

    exit();
}

if (isset($_POST["review_button"])) {
    //print_r($_POST);

    if (isset($_SESSION["user_id"])) {

        include "connection.php";

        $user_id = $_SESSION["user_id"];
        $review_rating = $_POST["review_rating"];
        $review_subject = htmlentities($_POST["review_subject"], ENT_QUOTES);
        $review_message = htmlentities($_POST["review_message"], ENT_QUOTES);



        $sql = "INSERT INTO `reviews` (`review_id`, `user_id`, `item_id`, `review_rating`, `review_subject`, `review_message`, `review_date`) VALUES (NULL, '$user_id', '$item_id', '$review_rating', '$review_subject', '$review_message', current_timestamp());";

        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        header("location: login.php");
    }
}


include "connection.php";

$sql = "SELECT * FROM items WHERE items.prod_id = $item_id";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        $item_id = $row["prod_id"];
        $item_title = $row["prod_title"];
        $item_description = $row["prod_desc"];
        $item_image = $row["prod_image"];
        $item_price = $row["prod_price"];
        $url = "code.addToCart.php?id=$item_id";
    }
} else {
    echo "0 results";
}



include "header.php"; ?>













<style>
    .breadcrumb-list>li {
        font-size: 14px;
        list-style: none;
        display: inline;
    }

    .breadcrumb-list>li a:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }

    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }

    .add-to-cart.action-wishlist {
        width: 50px;
        text-align: center;
        padding: 0;
    }

    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }

    .product-add-to-cart .cart-title,
    .product-add-to-cart .cart-title:hover,
    .product-list-action .cart-title,
    .product-list-action .cart-title:hover {
        background-color: transparent;
        border-bottom: none;
        color: inherit;
    }

    .product-add-to-cart .pro-add-btn i,
    .product-list-action .pro-add-btn i {
        margin-right: 10px;
        font-size: 18px;
    }

    .add-to-cart {
        display: inline-block;
    }

    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }

    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }

    .product-add-to-cart {
        float: none;
    }

    .single-product-wishlist {
        display: inline-block;
        position: relative;
        margin-left: 20px;
    }

    .product-thumbnail .owl-nav {
        display: none;
    }

    .breadcrumb-area {
        padding: 30px 0;
        background-color: #f3f3f3;
    }

    .breadmome-name {
        color: #ff6a00;
        font-size: 24px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 18px;
    }

    .breadcrumb-content>ul>li {
        display: inline-block;
        list-style: none;
        position: relative;
        font-size: 14px;
        color: #333;
    }

    .breadcrumb-content>ul>li.active {
        color: #ff6a00;
    }

    .breadcrumb-content>ul>li:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }

    .breadcrumb-content>ul>li:last-child:after {
        display: none;
    }

    .mt-80 {
        margin-top: 80px
    }

    .mb-80 {
        margin-bottom: 80px
    }

    .single-product-name {
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 900;
        color: #444;
        line-height: 24px;
        margin-bottom: 15px;
    }

    .single-product-reviews {
        margin-bottom: 10px;
    }

    .single-product-price {
        margin-top: 25px;
    }

    .single-product-action {
        margin-top: 30px;
        padding-bottom: 30px;
        border-top: 1px solid #ebebeb;
        border-bottom: 1px solid #ebebeb;
        float: left;
        width: 100%;
    }

    .product-discount {
        display: inline-block;
        margin-bottom: 20px;
    }

    .product-discount span.price {
        font-size: 28px;
        font-weight: 900;
        line-height: 30px;
        display: inline-block;
        color: #008bff;
    }

    .product-info {
        color: #333;
        font-size: 14px;
        font-weight: 400;
    }

    .product-info p {
        line-height: 30px;
        font-size: 14px;
        color: #333;
        margin-top: 30px;
    }

    .product-add-to-cart span.control-label {
        display: block;
        margin-bottom: 10px;
        text-transform: capitalize;
        color: #232323;
        font-size: 14px;
    }

    .product-add-to-cart {
        overflow: hidden;
        margin: 20px 0px;
        float: left;
        width: 100%;
    }

    .cart-plus-minus-box {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        color: #3c3c3c;
        height: 49px;
        text-align: center;
        width: 50px;
        padding: 5px 10px;
    }

    .product-add-to-cart .cart-plus-minus {
        margin-right: 25px;
    }

    .cart-plus-minus {
        position: relative;
        width: 75px;
        float: left;
        padding-right: 25px;
    }

    .add-to-cart {
        background: #008bff;
        border: 0;
        border-bottom: 3px solid #0680e5;
        color: #fff;
        box-shadow: none;
        padding: 0 30px;
        border-radius: 3px;
        font-weight: 400;
        cursor: pointer;
        font-size: 14px;
        text-transform: capitalize;
        height: 50px;
        line-height: 50px;
    }

    .add-to-cart:hover {
        background: #ff6a00;
        border-color: #e96405;
    }
</style>

<link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<div class="wrapper">

    <main>
        <div id="shopify-section-product-template" class="shopify-section">
            <div class="single-product-area mt-80 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-details-large" id="ProductPhoto">
                                <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="12. Aliexpress dropshipping by oberlo" data-zoom-image="<?php echo $item_image; ?>" src="<?php echo $item_image; ?>">

                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                    <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                    <div class="product-details">
                                        <h1 class="single-product-name"><?php echo "$item_title"; ?></h1>
                                        <div class="single-product-reviews">
                                            <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                        </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">YQT71020193</span></div>
                                        <div class="single-product-price">
                                            <div class="product-discount"><span class="price" id="ProductPrice"><span class=money>$<?php echo $item_price; ?></span></span></div>
                                        </div>
                                        <div class="product-info"><?php echo $item_description; ?></div>

                                        <div class="single-product-action">
                                            <div class="product-variant-option">
                                                <select name="id" id="productSelect" class="product-single__variants" style="display:none;">
                                                    <option selected="selected" data-sku="YQT71020193" value="19506517377094">Default Title - <span class=money>$20.66 USD</span></option>

                                                </select>
                                                <script>
                                                    jQuery(function() {
                                                        jQuery('.swatch :radio').change(function() {
                                                            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                            var optionValue = jQuery(this).val();
                                                            jQuery(this)
                                                                .closest('form')
                                                                .find('.single-option-selector')
                                                                .eq(optionIndex)
                                                                .val(optionValue)
                                                                .trigger('change');
                                                        });
                                                    });
                                                </script>
                                            </div>
                                            <style>
                                                .product-variant-option .selector-wrapper {
                                                    display: none;
                                                }
                                            </style>
                                            <div class="product-add-to-cart">
                                                <span class="control-label">Quantity</span>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                </div>
                                                <div class="add">



                                                    <a class="add-to-cart ajax-spin-cart" href="<?php echo $url; ?>">Add to Cart</a>




                                                    <script>
                                                        jQuery('#AddToCart').click(function(e) {
                                                            e.preventDefault();
                                                            Shopify.addItemFromFormStart('AddToCartForm', 1912078270534);
                                                        });
                                                    </script>

                                                    <div class="single-product-wishlist">
                                                        <a class="add-to-cart action-wishlist wishlist" href="wishlist.php?id=<?php echo $_GET['id'] ?>" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="secure-payment"><img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/files/guaranteed_safe_checkout1.png?v=1545216773"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .product-details .countdown-timer-wrapper {
                    display: none !important;
                }
            </style>

            <script>
                $(document).ready(function() {
                    $('.fancybox').fancybox();
                });
            </script>
            <script>
                function productZoom() {
                    $(".product-zoom").elevateZoom({
                        gallery: 'ProductThumbs',
                        galleryActiveClass: "active",
                        zoomType: "inner",
                        cursor: "crosshair"
                    });
                    $(".product-zoom").on("click", function(e) {
                        var ez = $('.product-zoom').data('elevateZoom');
                        $.fancybox(ez.getGalleryList());
                        return false;
                    });

                };

                function productZoomDisable() {
                    if ($(window).width() < 767) {
                        $('.zoomContainer').remove();
                        $(".product-zoom").removeData('elevateZoom');
                        $(".product-zoom").removeData('zoomImage');
                    } else {
                        productZoom();
                    }
                };

                productZoomDisable();

                $(window).resize(function() {
                    productZoomDisable();
                });
            </script>
            <script>
                $('.product-thumbnail').owlCarousel({
                    loop: true,
                    center: true,
                    nav: true,
                    dots: false,
                    margin: 10,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    item: 3,
                    responsive: {
                        0: {
                            items: 2
                        },
                        480: {
                            items: 3
                        },
                        992: {
                            items: 3,
                        },
                        1170: {
                            items: 3,
                        },
                        1200: {
                            items: 3
                        }
                    }
                });
            </script>
        </div>
    </main>
</div>












<style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .form-control {
        box-shadow: none;
        border-color: #ddd;
    }

    .form-control:focus {
        border-color: #FB6E9D;
        box-shadow: 0 0 8px rgba(251, 110, 157, 0.4);
    }

    .modal-login {
        color: #434343;

    }

    .modal-login .modal-content {
        padding: 20px;
        border-radius: 1px;
        border: none;
        position: relative;
    }

    .modal-login .modal-header {
        border-bottom: none;
    }

    .modal-login h4 {
        text-align: center;
        font-size: 22px;
        margin-bottom: -10px;
    }

    .modal-login .avatar {
        color: #fff;
        margin: 0 auto;
        text-align: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        z-index: 9;
        background: #FB6E9D;
        padding: 15px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-login .avatar i {
        font-size: 62px;
    }

    .modal-login .form-control,
    .modal-login .btn {
        min-height: 40px;
        border-radius: 1px;
        transition: all 0.5s;
    }

    .modal-login .hint-text {
        text-align: center;
        padding-top: 10px;
    }

    .modal-login .close {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    .modal-login .btn {
        background: #FB6E9D;
        border: none;
        line-height: normal;
    }

    .modal-login .btn:hover,
    .modal-login .btn:focus {
        background: #fb3c7a;
    }

    .modal-login .hint-text a {
        color: #999;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

<div class="text-center">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="trigger-btn btn btn-block" data-toggle="modal" data-backdrop="static">Post Review</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar"><i class="material-icons">&#xE7FD;</i></div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $page; ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="review_subject" class="form-control" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="review_message" id="" cols="30" rows="10" placeholder="Message" required="required"></textarea>

                    </div>




                    <div class="review_stars">
                        <input type="radio" name="review_rating" id="rating1" value="5"><label for="rating1"><i class="fa fa-star"></i></label>
                        <input type="radio" name="review_rating" id="rating2" value="4"><label for="rating2"><i class="fa fa-star"></i></label>
                        <input type="radio" name="review_rating" id="rating3" value="3"><label for="rating3"><i class="fa fa-star"></i></label>
                        <input type="radio" name="review_rating" id="rating4" value="2"><label for="rating4"><i class="fa fa-star"></i></label>
                        <input type="radio" name="review_rating" id="rating5" value="1"><label for="rating5"><i class="fa fa-star"></i></label>
                    </div>




                    <div class="form-group">
                        <input type="submit" name="review_button" class="btn btn-primary btn-block btn-lg" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>






<style>
    .card-inner {
        margin-left: 4rem;
    }
</style>

<style>
    .gold {
        color: gold;
    }

    .review_stars>input {
        display: none;
    }

    .review_stars>label {
        font-size: 2rem;
        color: grey;
    }

    .review_stars input:checked~label {
        color: gold;
    }

    .review_stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: right;
    }
</style>

<!--
Author : Maniruzzaman Akash
Email  : manirujjamanakash@gmail.com
-->

<!--To Work with icons-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container">
    <h2 class="text-center">User Comment Form</h2>


    <?php

    include "connection.php";

    $sql = "SELECT * from reviews, users where reviews.user_id = users.user_id and reviews.item_id = $item_id ORDER BY review_date DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {


            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $review_rating = $row["review_rating"];
            $review_subject = $row["review_subject"];
            $review_message = $row["review_message"];
            $review_date = $row["review_date"];

    ?>





            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
                            <p class="text-secondary text-center"><?php echo $review_date; ?></p>
                        </div>
                        <div class="col-md-10">
                            <p>
                                <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><?php echo "$first_name $last_name: $review_subject" ?></strong></a>

                                <span class="float-right">

                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {

                                        if ($i <= $review_rating) {
                                            echo '<i class="fa fa-star gold"></i>';
                                        } else {
                                            echo '<i class="fa fa-star"></i>';
                                        }
                                    }

                                    ?>




                                </span>

                            </p>
                            <div class="clearfix"></div>
                            <p><?php echo $review_message; ?></p>
                            <p>
                                <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    <?php








        }
    } else {
        echo "0 results";
    }


    ?>







</div>












<?php include "footer.php"; ?>