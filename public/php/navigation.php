<style>
    .row-fix, .row-fix > .column {
         padding: 0px;
    }
    .row-fix {
        margin: 0px;
    }
    a {
        font-size: 14px;
    }
/*========================= ĐỊnh dạng giỏ hàng ===================================*/ 
    .button-badge {
        text-decoration: none;
        padding: 1rem 1.5rem;
        position: relative;
        border-radius: .2rem;
        transition: all ease 0.4s;
    }
    .badge {
        position: absolute;
        top: -11px;
        right: -55px;
        font-size: 1.2em;
        background-color: white;
        border-radius: 50%;
    }
</style>
<div class="header">
    <div class="container-header">
        <nav class="navbar navbar-expand-lg navbar-dark">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                    <a class="nav-link">Trợ giúp</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link">Liên hệ</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link">Kết nối</a>
                </li>
             </ul>

             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-percent"></i> Khuyến mãi</a>
                </li>
                <li class="nav-item">
                     <a href="#" class="nav-link"><i class="fa fa-truck"></i> Trạng thái</a>
                </li>
                <li class="nav-item">
                        <!---------------------------Lấy phần đăng nhập/ đăng xuất, chào người dùng----->
                    <?php
                        if(isset($_SESSION['us']) && $_SESSION['us'] != NULL) {
                            echo '
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fa fa-user-circle"></i> '.$_SESSION['us'].'</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="../user/signout.php" class="nav-link"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                                </li>
                            ';
                        }
                        else {
                            echo '
                                <li class="nav-item">
                                    <a href="#" data-toggle="modal" data-target="#myModal" class="nav-link"><i class="fa fa-user-circle"></i> Đăng nhập/Đăng ký</a>
                                </li>
                            ';
                            include_once 'signin.php';
                            }
                    ?>
                </li>
             </ul>
        </nav>
    </div>

    <div class="container-header">
        <div class="row row-fix">
            <div class="col-sm-2 col-12 logo" style="text-align:center;">
                <a href="index.php">
                    <img src="logo.png">
                </a>
            </div>
            <div class="col-sm-9 col-9 search-container">
                <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập sản phẩm cần tìm..." id="mail" name="email">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">
                                 <i class="fa fa-search"></i>
                            </button>
                        </div>
                </div>
            </div>
            <div class="col-sm-1 col-3">
                <a href="shoppingcart.php" class="button-badge">
                    <i class="fa fa-shopping-cart"></i>
                    <?php
                        if(!empty($_SESSION["shopping_cart"])) {
                            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                            echo '<span class="badge">'.$cart_count.'</span>';
                        }
                        else {
                            echo '<span class="badge">0</span>';
                        }  
                    ?>                    
                </a>
            </div>
        </div>
    </div>
</div>
<!-- -------------------------------------KÊT THÚC PHẦN HEADER-->
<script src="js/tab.js"></script>