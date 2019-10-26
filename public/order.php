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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--BS4-->

        <link rel="stylesheet" href="owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>
    </head>

    <body>
        <?php include_once "php/navigation.php"?>
    <div class="container" style="margin-top: 7.4375rem;">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <br>
            <h4>Thông tin người mua hàng</h4>
                    <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Name">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Address">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Phone">
                    </div>

                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea rows="5" class="form-control" style="resize: none;" name="content"></textarea>
                    </div>
                    
                    <br>
                    
                    <input type="submit" class="btn btn-success" value="Thanh toán">
                    </form>
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
    </body>
    

