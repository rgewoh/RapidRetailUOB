<?php
session_start();
include "code.isLoggedIn.php"; //check if user is logged in
include "code.viewCart.php"; //get cart information
include "header.php";
include "code.alerts.php";

?>










<style>
    .quantity {
        float: left;
        margin-right: 15px;
        background-color: #eee;
        position: relative;
        width: 80px;
        overflow: hidden
    }

    .quantity input {
        margin: 0;
        text-align: center;
        width: 15px;
        height: 15px;
        padding: 0;
        float: right;
        color: #000;
        font-size: 20px;
        border: 0;
        outline: 0;
        background-color: #F6F6F6
    }

    .quantity input.qty {
        position: relative;
        border: 0;
        width: 100%;
        height: 40px;
        padding: 10px 25px 10px 10px;
        text-align: center;
        font-weight: 400;
        font-size: 15px;
        border-radius: 0;
        background-clip: padding-box
    }

    .quantity .minus,
    .quantity .plus {
        line-height: 0;
        background-clip: padding-box;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -webkit-background-size: 6px 30px;
        -moz-background-size: 6px 30px;
        color: #bbb;
        font-size: 20px;
        position: absolute;
        height: 50%;
        border: 0;
        right: 0;
        padding: 0;
        width: 25px;
        z-index: 3
    }

    .quantity .minus:hover,
    .quantity .plus:hover {
        background-color: #dad8da
    }

    .quantity .minus {
        bottom: 0
    }

    .shopping-cart {
        margin-top: 20px;
    }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shopping cart
            <a href="store.php" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">





            <?php

            if (empty($cart)) {
                $_SESSION["alerts"] = "Cart is empty";
                exit();
            } else {

                foreach ($cart as $key => $item) {

                    $item_id = $item["prod_id"];
                    $item_title = $item["prod_title"];
                    $item_price = $item["prod_price"];
                    $item_image = $item["prod_image"];
                    $cart_id = $item["cart_id"];
                    $link = "code.removeFromCart.php?id=$cart_id";
            ?>

                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                            <img class="img-responsive" src="<?php echo $item["prod_image"]; ?>" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?php echo $item["prod_title"] ?></strong></h4>
                            <h4>
                                <small>Product description</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong><?php echo $item["prod_price"]; ?> <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">

                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty" size="4">

                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">

                                <a class="btn btn-outline-danger btn-xs" href="<?php echo $link; ?>"> <i class="fa fa-trash" aria-hidden="true"></i> </a>


                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->


            <?php


                } //end looping through cart
            } //end if cart is not empty






            ?>











            <div class="pull-right">
                <a href="" class="btn btn-outline-secondary pull-right">
                    Update shopping cart
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-default" value="Use Coupon">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin: 10px">
                <a href="checkout.php" class="btn btn-success pull-right">Checkout</a>
                <div class="pull-right" style="margin: 5px">
                    Total price: <b>$<?php echo $subtotal; ?></b>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>