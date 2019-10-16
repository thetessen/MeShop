<div id="header-top">
    <div class="container">
        <div class="flex-container">

            <div class="logo">
                <img src="logo.png">
            </div>

            <div class="search-container">
                <form>
                    <input type="text" placeholder="Nhập sản phẩm cần tìm.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!--=============================================MENU=======================================-->
            <div class="header-right">
                <div class="navbar-me">
                    <a href="#"><i class="fa fa-percent"></i> Khuyến mãi</a>
                    <a href="#"><i class="fa fa-truck"></i> Trạng thái</a>
                    <a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-circle"></i> Đăng nhập/Đăng ký</a>
                </div>
                <?php include_once 'signin.php'?>
            </div>
            <!--=============================================MENU=======================================-->
        </div>
    </div>
</div>
<!-- -------------------------------------KÊT THÚC PHẦN HEADER-->
<script src="js/tab.js"></script>