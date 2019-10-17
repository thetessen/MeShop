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
                <div class="row">

                    <?php   
                        $sql_sp     = "";
                        $result     = "";
                        if(isset($_GET['p_loai']))
                        {
                            if($_GET['p_loai'] == "new" OR $_GET['p_loai'] == "hot" ) {

                                $sql_sp     =   "SELECT *FROM product WHERE p_group = '".$_GET['p_loai']."'";
                                $result     =    $con->query($sql_sp);
                            }
                            else {
                                $sql_sp     =   "SELECT *FROM product WHERE p_id = '".$_GET['p_loai']."'";
                                $result     =    $con->query($sql_sp);
                            }
                        }
                    // kiểm tra số hàng trả về
                         if($result -> num_rows > 0) {
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
                        }

                    }
                    else {
                        echo "Không có sản phẩm nào";
                    }
                ?>
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