
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

        <link rel="stylesheet" href="public/owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="public/owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='public/css/style1.css'>
    </head>
    <body>
        <?php include_once "./views/layouts/navigation.php"?>
        
        <!-------------Phần danh mục và slider------------->
        <br>
        <div id="cata" style="margin-top: 7.4375rem;">
            <div class="container">
                 <div class="row">

                    <?php if(isset($dulieutrong)){
                             echo '<h2 class="center">Danh mục chưa có sản phẩm nào !</h2>';
                           } else {
                    ?>
                    <?php while($data = $listsanpham->fetch_assoc()){ ?>

                        <div class="col-sm-3 box">
                            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="product">
                                <img src= "<?php echo $data['anhdaidien'] ?>" class="img-responsive" style="width:100%" alt="Image">

                                <p><?php echo $data['ten'] ?></p>

                                <p class="price"><?php echo $data['gia'] ?>000 VNĐ</p>

                                <p><a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="me-btn" style="color:white">Xem Ngay</a></p>
                                </a>
                        </div>

                    <?php } } ?>

            </div>
        </div>
        <!---------------------FOOTER----------------------------------->
        <div class="line"></div>
        <br>
        <?php include_once "./views/layouts/footer.php" ?>
        <script src="public/owl carousel/jquery-3.4.1.min.js"></script>
        <script src="public/owl carousel/owl.carousel.min.js"></script>
        <script src="public/js/tab.js"></script>
    </body>
</html>