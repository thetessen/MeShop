<?php
    session_start();
    include('../database/sql.php');
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
        <!--BS4-->
        <link rel="stylesheet" href="owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    </head>

    <body>
        <!-- ----------PHần MENU----------------->
        <?php include_once 'php/navigation.php'; ?>

            <!-- --------BẮT ĐẦU PHẦN MAIN    -->
            <div id="main">
                <div class="container">
                    <div class="flex-container">
                        <!---------------------------------- CATA -->
                        <?php include_once 'php/catagory.php'; ?>
                            <!-- -------------------------------- CATA -->
                            <!-- -------------------------------- SLIDEER -->
                            <?php include_once 'php/slider.php'; ?>
                    </div>
                </div>
            </div>
            <div class="promtion">
                <div class="container">
                    <div data-v-64d23507="" data-v-0489199a="" class="row v3-promotion-block v3-content-section mt20" style="background-color: rgb(228, 228, 228);">
                        <span data-v-64d23507="" class="v3-promotion-notify-icon" style="background: rgb(247, 11, 24); box-shadow: rgb(242, 113, 120) 0px 0px 0px 0px;"></span>
                        <marquee data-v-64d23507="" data-track-content="" data-content-name="header-promotion-text" class="v3-header-promotion-text"><a data-v-64d23507="" href="https://phongvu.vn/promo/laptop-weeksale?pv_source=website&amp;pv_campaign=promo-1401&amp;pv_medium=header-promotion-text" data-content-piece="promo-1009" class="v3-header-promotion-text-item" style="color: rgb(215, 30, 48); text-decoration: none">
                        Tuần lễ Laptop siêu ưu đãi - Giảm tới 1.400.000đ chỉ từ 8.790.000đ! Giảm thêm 5% tối đa 1 triệu
                        khi quét VNPAY-QR. Duy nhất đến 10/10/2019. Mua ngay!</a>
                        </marquee>
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
                </div>
            </div>
            <div class="container">
                <div class="new">
                    <div class="new-head">
                        <h3 title="Sản phẩm mới ra mắt">Mua nhiều nhất</h3>
                    </div>
                </div>
            </div>
            <div class="product-view">
                <div class="container">
                    <div class="row">

                        <?php
                            $sql_sp     =   "SELECT *FROM product WHERE p_group = 'hot'";
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
                        <p><a href="viewall.php?p_loai=hot">Xem tất cả</a></p>
                    </div>
                </div>

                <div class="line"></div>
                <!---------------------------------Phần footer------------------------->
                <?php include_once 'php/footer.php'?>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

                    <script src="owl carousel/jquery-3.4.1.min.js"></script>
                    <script src="owl carousel/owl.carousel.min.js"></script>

                    <script src="js/main.js"></script>
    </body>