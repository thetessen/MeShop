<?php
    session_start();
    include('../database/sql.php');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Giỏ Hàng</title>
        <link rel=icon href=logo.png sizes="16x16" type="image/png">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <!---BS4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--BS4-->
        <link rel="stylesheet" href="owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/shoppingcart.css'>
    </head>

    <body>

        <div id="main">
            <?php include_once 'php/navigation.php'; ?>
                <div class="container">
                    <h3>Sản Phẩm</h3>

                    <div class="shopping-cart">

                        <div class="column-labels">
                            <label class="product-image">Image</label>
                            <label class="product-details">Product</label>
                            <label class="product-price">Giá</label>
                            <label class="product-quantity">Số Lượng</label>
                            <label class="product-removal">Xóa sản phẩm</label>
                            <label class="product-line-price">Tổng</label>
                        </div>

                        <div class="product">
                            <div class="product-image">
                                <img src="images/nike.jpg">
                            </div>
                            <div class="product-details">
                                <div class="product-title">Nike Flex Form TR Women's Sneaker</div>
                                <p class="product-description"> It has a lightweight, breathable mesh upper with forefoot cables for a locked-down fit.</p>
                            </div>
                            <div class="product-price">12.99</div>
                            <div class="product-quantity">
                                <input type="number" value="2" min="1">
                            </div>
                            <div class="product-removal">
                                <button class="remove-product">
                                    Xóa Sản Phẩm
                                </button>
                            </div>
                            <div class="product-line-price">25.98</div>
                        </div>

                        <div class="product">
                            <div class="product-image">
                                <img src="images/adidas.jpg">
                            </div>
                            <div class="product-details">
                                <div class="product-title">ULTRABOOST UNCAGED SHOES</div>
                                <p class="product-description">Born from running culture, these men's shoes deliver the freedom of a cage-free design</p>
                            </div>
                            <div class="product-price">45.99</div>
                            <div class="product-quantity">
                                <input type="number" value="1" min="1">
                            </div>
                            <div class="product-removal">
                                <button class="remove-product">
                                    Xóa Sản Phẩm
                                </button>
                            </div>
                            <div class="product-line-price">45.99</div>
                        </div>

                        <div class="totals">
                            <div class="totals-item">
                                <label>Giá sản phẩm</label>
                                <div class="totals-value" id="cart-subtotal">71.97</div>
                            </div>
                            <div class="totals-item">
                                <label>Tax (5%)</label>
                                <div class="totals-value" id="cart-tax">3.60</div>
                            </div>
                            <div class="totals-item">
                                <label>Shipping</label>
                                <div class="totals-value" id="cart-shipping">15.00</div>
                            </div>
                            <div class="totals-item totals-item-total">
                                <label>Tổng Thanh Toán</label>
                                <div class="totals-value" id="cart-total">90.57</div>
                            </div>
                        </div>

                        <button class="checkout">Thanh Toán</button>

                    </div>
                </div>

        </div>
        <div class="container">
            <div class="new">
                <div class="new-head">
                    <h3 title="Sản phẩm mới ra mắt">SẢN PHẨM MỚI</h3>
                </div>
            </div>
        </div>
        <div class="product-new">
            <div class="container">
                <div class="row">
                    <?php
                            $sql_sp     =   "SELECT *FROM product WHERE p_group = 'new'";
                            $result     =    $con->query($sql_sp);
                            // kiểm tra số hàng trả về
                            if($result -> num_rows > 0) {
                                $i = 0;
                                foreach($result as $sp) {
                                    echo'
                                    <div class="column">
                                        <div class="content">
                                            <a href="#">
                                                <img src="image/'.$sp["p_img"].'" style="width: 200px, height: 200px">
                                            </a>
                                            <h3>'.$sp["p_name"].'</h3>
                                            <p class="price">'.number_format($sp['p_gia'],0,'','.').'</p>
                                            <p>'.$sp["p_cauhinh"].'</p>
                                            <p><a href="details.php?p_id='.$sp["p_id"].'" class="me-btn">Xem chi tiết</a></p>
                                    </div>
                                   </div>
                                    ';
                                    if(++$i > 3) break;
                                }

                            }
                            else {
                                echo "Không có sản phẩm nào";
                            }
                ?>
                </div>

                <div class="new-all">
                    <p><a href="viewall.php?p_loai=new">Xem tất cả</a></p>
                </div>
                <div class="line"></div>
                <!---------------------------------Phần footer------------------------->
                <?php include_once 'php/footer.php'?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                    <script src="owl carousel/jquery-3.4.1.min.js"></script>
                    <script src="owl carousel/owl.carousel.min.js"></script>

                    <script src="js/shoppingcart.js"></script>
                    <script>
                        < script src = "http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
                        charset = "utf-8" >
                    </script>

    </body>