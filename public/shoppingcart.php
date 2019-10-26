<?php
    session_start();
    include('../database/sql.php');
    $status="";
    //Xóa sản phẩm trong list
    if (isset($_POST['action']) && $_POST['action']=="remove"){
        if(!empty($_SESSION["shopping_cart"])) {
            foreach($_SESSION["shopping_cart"] as $key => $value) {
                    if($_POST["code"] == $key){
                        unset($_SESSION["shopping_cart"][$key]);
                        $status = "<div class='box' style='color:red;'>
                        Product is removed from your cart!</div>";
                }
                if(empty($_SESSION["shopping_cart"]))   
                        unset($_SESSION["shopping_cart"]);
                    }		
                }
            }


            if (isset($_POST['action']) && $_POST['action']=="change"){
                foreach($_SESSION["shopping_cart"] as &$value){
                  if($value['p_name'] === $_POST["code"]){
                      $value['quantity'] = $_POST["quantity"];
                      break; // Stop the loop after we've found the product
                  }
              }
            }
?>

    <!DOCTYPE html>
    <html>
    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MeShop</title>
        <link rel=icon href=logo.png sizes="16x16" type="image/png">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <!---BS4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--BS4-->

        <link rel="stylesheet" href="owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/shoppingcart.css'>
    </head>

    <body>
        <?php include_once "php/navigation.php"?>
        
        <!-------------Phần danh mục và slider------------->
        <br>
        
        <div class="container" style="margin-top: 7.4375rem;">
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
                        <?php
                            if(!empty($_SESSION["shopping_cart"])) {
                                $total_price = 0;
                                    foreach ($_SESSION["shopping_cart"] as $product){
                        ?>
                                        <div class="product">
                                        <div class="product-image">
                                            <img src="image/<?php echo $product["p_img"]?>">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-title"><?php $product["p_name"]?></div>
                                            <p class="product-description">
                                                <p>Cấu hình: <?php echo $product["p_cauhinh"] ?></p>
                                                <p>RAM: <?php echo $product["p_ram"] ?></p>
                                                <p>HDD:<?php echo $product["p_hdd"] ?></p>
                                            </p>
                                        </div>
                                        <div class="product-price"><?php echo number_format($product['p_gia'],0,'','.')?></div>
                                        <div class="product-quantity">
                                        <form method="post">
                                             <input type="hidden" name="code" value= "<?php echo $product['p_name']?>"/>
                                            <input type="hidden" name="action" value="change" />
                                            <select name="quantity" onchange="this.form.submit()">
                                            <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                            <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                            <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                            <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                            <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                            </select>
                                        </form>
                                        </td>
                                        
                                        </div>
                                        <div class="product-removal">
                                        <form method="post" action="">
                                            <input type="hidden" name="code" value= "<?php echo $product['p_name']?>"/>
                                            <input type="hidden" name="action" value="remove" />
                                            <button type="submit" class="remove-product">
                                                    Xóa Sản Phẩm
                                            </button>
                                        </form>
                                        </div>
                                        <div class="product-line-price"><?php echo number_format($product['p_gia']*$product["quantity"],0,'','.')?></div>
                                    </div>
                            <?php
                                    $total_price += ($product["p_gia"]*$product["quantity"]);
                                }
                            ?>
                                <div class="totals-item totals-item-total" style="float:right;">
                                    <label>Tổng Thanh Toán</label>
                                    <div class="totals-value" id="cart-total">
                                        <?php if($total_price!=null){
                                                    echo $total_price;
                                            }
                                            else {
                                                echo 0;
                                            } ?>
                                    </div>
                                </div>
                            <?php
                            }
                            else {
                                echo "Không có sản phẩm nào trong giỏ hàng";
                            }
                            ?>
                                       <div class="totals">
       
                        </div>
                        <br>
                        <br>
                        <a href="order.php" class="checkout btn-block" style="text-decoration:none; text-align:center;">Thanh Toán</a>

                    </div>

                    </div>
                </div>

        </div>
        <br>
            <?php include_once "php/productnew.php" ?>
        <br>
        <!---------------------FOOTER----------------------------------->
        <div class="line"></div>
        <br>
        <?php include_once "php/footer.php" ?>


                    <script src="owl carousel/jquery-3.4.1.min.js"></script>
                    <script src="owl carousel/owl.carousel.min.js"></script>
                    <script src="js/tab.js"></script>
                    <script src="js/shoppingcart.js"></script>
                    <script>
                        $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                responsiveClass:true,
                                responsive:{
                                    0:{
                                        items:1,
                                        nav:true
                                    },
                                    600:{
                                        items:1,
                                        nav:false
                                    },
                                    1000:{
                                        items:1,
                                        nav:true,
                                        loop:false
                                    }
                                }
                            })
                    </script>
    </body>