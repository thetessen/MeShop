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
        <link rel='stylesheet' type='text/css' media='screen' href='css/details.css'>
    </head>

    <body>
        <!-- ----------PHần MENU----------------->
        <?php include_once 'php/navigation.php'; ?>

            <!-- --------BẮT ĐẦU PHẦN MAIN    -->
            <div id="main">
                <div class="container">
                    <?php include_once 'php/navigation.php'; ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <?php
                if(isset($_GET['p_id'])) {
                    $sql_sp     =   "SELECT *FROM product WHERE p_id = 6 ";
                    $result     =    $con->query($sql_sp);
                    foreach($result as $sp) {
                        echo '
                        <img src="image/'.$sp['p_img'].'">
                        <div class="description">
                            <h2>Mô tả</h2>
                            THÔNG TIN CHI TIẾT SẢN PHẨM
                            <br>
                            Tên máy : '.$sp['p_name'].'
                            <br>
                            Cấu hình : '.$sp['p_cauhinh'].'
                            <br>
                            Bộ nhớ : '.$sp['p_ram'].'
                            <br>
                            HDD : '.$sp['p_hdd'].'
                            <br>
                            VAG : '.$sp['p_vga'].'
                        </div>  
                    ';
                    }
                }
                else {
                    echo "no";
                }
        ?>
                            </div>
                            <div class="col-lg-8">

                                <?php
                if(isset($_GET['p_id'])) {
                    $sql_sp     =   "SELECT *FROM product WHERE p_id = 6 ";
                    $result     =    $con->query($sql_sp);
                    foreach($result as $sp) {
                        echo '
                        <h2 class="title">
                        '.$sp['p_name'].' '.$sp['p_cauhinh'].' '.$sp['p_ram'].'
                        </h2>
                            <div class="price">
                                <p>Giá bán : '.number_format($sp['p_gia'],0,'','.').'</p>
                                <p>
                                    Khuyến mãi: 
                                    Mua 1 tặng một balo
                                </p>
                                <p>
                                    Vận chuyển
                                    Miễn phí vận chuyển(với đơn hàng trên 500.000đ)
                                </p>    
                             </div>
                    ';
                    }
                }
                else {
                    echo "no";
                }
        ?>

                                    <div class="quantity" style="border-top: 2px solid red;">
                                        <div class="input-group input-number-group">
                                            <div style="padding-top: 10px">
                                                <div class="sl">
                                                    <p>Chọn số lượng</p>
                                                </div>
                                            </div>
                                            <div class="input-group-button">
                                                <span class="input-number-decrement">-</span>
                                            </div>
                                            <input class="input-number" type="number" value="1" min="0" max="1000" style="margin-top: 10px">
                                            <div class="input-group-button">
                                                <span class="input-number-increment">+</span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-danger">Mua Ngay</button>
                                    <button type="button" class="btn btn-danger">Thêm Vào Giỏ Hàng</button>
                                    <p style="margin-top: 25px">Chia sẻ sản phẩm</p>
                            </div>
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

                        <script src="js/detail.js"></script>
    </body>