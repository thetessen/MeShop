
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
                <div class="col-lg-4">
                    <img src="<?php echo $sanpham['anhdaidien'] ?>">
                    <div class="description">
                        <h2>Mô tả</h2> THÔNG TIN CHI TIẾT SẢN PHẨM
                        <br> Tên Sản Phẩm :
                        <?php echo $sanpham['ten'] ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="title"><?php echo $sanpham['ten'] ?></h2>
                    <div class="price">
                        <p>Giá bán : <?php echo $sanpham['gia'] ?>000 VNĐ </p>
                    <form action="sanpham.php?task=addtocart" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sanpham['id_sanpham'] ?>">
                        <span class="h6">Màu sắc : </span>
                        <?php 
                            //Xử lý màu sắc
                            $mangMauSac = explode('|', $sanpham['mausac']);
                        ?>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <?php foreach($mangMauSac as $key=>$mausac){ ?>

                                <label class="btn btn-danger">
                                    <input type="radio"
                                        <?php if($key==0) echo 'checked'; ?> 
                                            name="mausac" 
                                            id="<?php echo $key ?>" autocomplete="off"
                                            value="<?php echo $mausac ?>">
                                        <?php echo $mausac ?>
                                </label>

                            <?php } ?>
                        </div>
                        <br>
                        <br>
                        <span class="h6">Số lượng :</span>
                        <input type="number" value="1" min="1" max="100" class="form-control" style="display: inline;width: 4em;" name="soluong">
                        <br>
                        <br>
                                <?php if(isset($_SESSION['user_data'])){
                                    echo '
                                    <button class="btn btn-outline-danger"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
                                    <button type="submit" class="btn btn-danger">Đặt hàng </button>
                                    </form>
                                    ';
                                 }
                                 
                             else {
                                echo '
                                </form>
                                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đặt mua</button>
                                ';
                                ?>
                            <?php } ?>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Trước hết bạn cần đăng nhập</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="quanly.php?task=dangnhap" method="POST">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="username" name="tendangnhap" placeholder="Tên đăng nhập">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="password" name="matkhau" placeholder="Mật khẩu">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở lại</button>
                                                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                            </div>
                            <p style="margin-top: 25px">Chia sẻ sản phẩm</p>

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active text-danger" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả sản phẩm</a>
                                    <a class="nav-item nav-link text-danger" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bình luận</a>
                                    <a class="nav-item nav-link text-danger" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sản phẩm liên quan</a>
                                </div>
                            </nav>
                            <div class="tab-content border border-top-0 p-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <?php echo $sanpham['mota'] ?>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum odit molestias velit, aliquid repudiandae officiis libero minima autem quod, omnis nihil, accusantium debitis enim aperiam vitae. Reprehenderit quis, hic possimus commodi dolores esse ex unde cupiditate temporibus illo in perferendis nisi, fuga magnam minus culpa laboriosam debitis voluptas amet voluptate?</div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <!---------------------FOOTER----------------------------------->
            <div class="line"></div>
            <br>
            <?php include_once "./views/layouts/footer.php" ?>

            <script src="owl carousel/jquery-3.4.1.min.js"></script>
            <script src="owl carousel/owl.carousel.min.js"></script>
            <script src="public/js/tab.js"></script>
</body>