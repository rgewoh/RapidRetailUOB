<?php
include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products at Rapid Retail</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>









<style>
    .row-2 {
        justify-content: space-between;
        margin: 100px auto 50 px;
    }

    select {
        border: 1px solid #ff523b;
        padding: 5px;
    }

    select:focus {
        outline: none;
    }

    .page-btn {
        margin: 0 auto 80px;
    }

    .page-btn span {
        display: inline-block;
        border: 1px solid #ff523b;
        margin-left: 10px;
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
    }

    .page-btn span:hover {
        background: #ff523b;
        color: #fff;
    }
</style>


<div class="container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default Sorting</option>
            <option>Sort By Price</option>
            <option>Sort By Popularity</option>
            <option>Sort By Rating</option>
            <option>Sort By Sale</option>
        </select>
    </div>
    <div class="product-list">
        <div class="row">

            <?php

            include "connection.php";

            $sql = "select * from products";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $prod_id = $row["prod_id"];
                    $prod_title = $row["prod_title"];
                    $prod_price = $row["prod_price"];
                    $prod_image = $row["prod_image"];
                    $link = "details.php?id=$prod_id";

            ?>
                    <div class="col-3">
                        <div class="white-box">
                            <div class="product-img">
                                <img src="<?php echo $prod_image ?>" width="80%">
                            </div>
                            <div class="product-bottom">
                                <div class="product-name"><?php echo $prod_title ?></div>
                                <div class="price">
                                    <span class="rupee-icon">$</span> <?php echo $prod_price ?>
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <a href="<?php echo $link; ?>" class="blue-btn">Add to cart</a>
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
    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>
</div>


<?php include "footer.php"; ?>