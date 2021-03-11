<?php



include "header.php"; ?>

<h1>Products Page</h1>









<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800&display=swap');

    .product-list {
        padding: 20px 10px 20px;
        font-family: 'Nunito Sans', sans-serif;
    }

    .product-list>ul {
        margin: 0 -10px;
        padding: 0;
        list-style: none;
        display: flex;
    }

    .product-list>ul>li {
        width: 25%;
        padding: 10px;
    }

    .white-box {
        border-radius: 5px;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.4);
        background-color: #ffffff;
        padding: 35px 20px;
        transition: all 0.5s ease-in-out;
        position: relative;
    }

    .wishlist-icon {
        position: absolute;
        right: 12px;
        top: 10px;
    }

    .wishlist-icon img {
        width: 20px;
        height: 20px;
    }

    .product-img {
        min-height: 135px;
    }

    .product-img img {
        max-width: 100%;
        max-height: 130px;
        display: block;
        margin: 0 auto;
    }

    .product-bottom {
        text-align: center;
    }

    .product-name {
        font-size: 16px;
        color: #666;
        text-align: center;
        margin: 10px 0 10px;
        font-weight: 600;
        max-height: 48px;
        min-height: 48px;
        overflow: hidden;
    }

    .price {
        margin-top: 0;
        font-size: 18px;
        font-weight: 600;
        color: #000000;
        font-family: 'Open Sans', sans-serif;
    }

    .blue-btn {
        background: #13cfdf;
        border-radius: 5px;
        color: #ffffff;
        font-weight: 700;
        border: none;
        padding: 0 15px;
        cursor: pointer;
        height: 30px;
        line-height: 30px;
        max-width: 132px;
        margin: 10px auto 0;
        display: block;
        text-align: center;
        text-decoration: none;
    }

    .price .line-through {
        font-size: 14px;
        color: #999999;
        font-weight: 400;
        vertical-align: 1px;
        display: inline-block;
        text-decoration: line-through;
        margin-left: 4px;
    }
</style>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="product-list">
        <div class="row">

            <?php

            include "connection.php";

            $sql = "select * from products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $prod_title = $row["prod_title"];
                    $prod_price = $row["prod_price"];
                    $prod_image = $row["prod_image"];

            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="wishlist-icon">
                                <a href="javascript:void(0);"><img src="https://pngimage.net/wp-content/uploads/2018/06/wishlist-icon-png-3.png" /></a>
                            </div>
                            <div class="product-img">
                                <img src="<?php echo $prod_image ?>">
                            </div>
                            <div class="product-bottom">
                                <div class="product-name"><?php echo $prod_title ?></div>
                                <div class="price">
                                    <span class="rupee-icon">₹</span> <?php echo $prod_price ?>
                                </div>
                                <a href="#" class="blue-btn">Add to cart</a>
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
    </div>
</div>


<?php include "footer.php"; ?>