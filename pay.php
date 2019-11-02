<?php
    session_start();

        if(!empty($_SESSION["count"])) {
            unset($_SESSION["count"]);
        }

        if(!empty($_SESSION["giohang"])) {
            foreach($_SESSION["giohang"] as $key) {
                        unset($_SESSION["giohang"]);
                }
                if(empty($_SESSION["giohang"]))   unset($_SESSION["giohang"]);
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
        <link rel='stylesheet' type='text/css' media='screen' href='public/css/style1.css'>
    </head>

    <body>
    <?php include_once "./views/layouts/navigation.php" ?>
        <div class="container" style="margin-top: 8rem;">
        <div class="col-sm-12">
            <div style="text-align: center;">
                <h3 style="color: green;">Đơn hàng của quý khách đã được đặt <b>THÀNH CÔNG</b>!</h3>
                <i>Quý khách sẽ sớm nhậm được cuộc gọi xác nhận của chúng tôi, cảm ơn quý khách</i>
                <a href="index.php">Quay lại trang chủ</a><br><br>
                <img src="public/image/tks4buying.png">
            </div>
            </div>
        </div>

        <!---------------------FOOTER----------------------------------->
        <div class="line"></div>
        <br>
        <?php include_once "./views/layouts/footer.php" ?>
    </body>
    

