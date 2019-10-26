       <!-- ----------PHần MENU----------------->
       <div class="container-fluid full-width header">
            <div class="row-fluid header-top">
                <div class="container">
                    <!-----------------------ĐỊNH DẠNG MENU PHẦN TRÊN CÙNG----------------->
                         <div class="wrapper">
                            <div class="item1">
                                <a href="#" class="nav-me">Trợ giúp</a>
                            </div>
                            <div class="item2">
                                <a href="#" class="nav-me">Liên hệ</a>
                            </div>
                            <div class="item3">
                                <a href="#" class="nav-me">Kết nối</a>
                            </div>
                            <div class="item4">
                                <a href="#" class="nav-me"><i class="fa fa-percent"></i> Khuyến mãi</a>
                            </div>
                            <div class="item5">
                                <a href="#" class="nav-me"><i class="fa fa-truck"></i> Trạng thái</a>
                            </div>
                            <?php
                                    if(isset($_SESSION['us']) && $_SESSION['us'] != NULL) {
                                        echo '
                                                <div class="item6">
                                                     <a href="#"><i class="fa fa-user-circle"></i> '.$_SESSION['us'].'</a> 
                                                </div>
                                                <div class="item7">
                                                     <a href="../user/signout.php" class="nav-me"><i class="fa fa-sign-out"></i>Đăng Xuất</a>
                                                </div>
                                        
                                        ';
                                    }
                                    else {
                                        echo '
                                            <div class="item6">
                                                <a href="#" data-toggle="modal" data-target="#myModal" class="nav-me"><i class="fa fa-user-circle"></i> Đăng nhập/Đăng ký</a>
                                            </div>
                                        ';
                                        include_once 'php/signin.php';
                                        }
                             ?>
                        </div>
                    <!-----------------------ĐỊNH DẠNG MENU PHẦN TRÊN CÙNG----------------->
                    
                    <!-----------------------ĐỊNH DẠNG MENU PHẦN GIỮA----------------->
                    <div class="row">
                        <div class="col-sm-2 col-12 logo" style="text-align:center;">
                            <a href="index.php">
                                <img src="logo.png">
                            </a>
                        </div>
                        <div class="col-sm-9 col-8 search-container">
                            <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nhập sản phẩm cần tìm..." id="mail" name="email">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-1 col-2">
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
                     <!-----------------------ĐỊNH DẠNG MENU XONG PHẦN GIỮA----------------->
                </div>
            </div>
        </div>
        <!-- ----------PHần MENU----------------->
<!-- -------------------------------------KÊT THÚC PHẦN HEADER-->
<script src="js/tab.js"></script>