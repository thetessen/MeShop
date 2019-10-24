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
                                    ';
                                    
                            <?php
                                                        $total_price += ($product["p_gia"]*$product["quantity"]);
                                }
                            ?>
                                <div class="totals-item totals-item-total">
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
                            <!-- <div class="totals-item">
                                <label>Giá sản phẩm</label>
                                <div class="totals-value" id="cart-subtotal">71.97</div>
                            </div> -->
                            <!-- <div class="totals-item">
                                <label>Tax (5%)</label>
                                <div class="totals-value" id="cart-tax">3.60</div>
                            </div>
                            <div class="totals-item">
                                <label>Shipping</label>
                                <div class="totals-value" id="cart-shipping">15.00</div>
                            </div> -->
       
                        </div>

                        <button class="checkout">Thanh Toán</button>

                    </div>

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