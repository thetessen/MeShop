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
    <link rel='stylesheet' type='text/css' media='screen' href='public/css/shoppingcart.css'>

    <style>
        label {
            color: black;
        }
    </style>
</head>

<body>
            <?php include_once 'header.php'?>
            <div class="col-md-10">
                <!-- thong ke -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-deck m-0">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Danh mục
                                    <div class="card-body-icon">
                                        <i class="fa fa-list-ol"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Xem Danh Mục</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li><a href="#" class="text-white">Danh sách</a></li>
                                            <li><a href="#" class="text-white">Thêm danh mục</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                <div class="card-header">Sản phẩm
                                    <div class="card-body-icon">
                                        <i class="fa fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Xem Sản Phẩm</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li><a href="#" class="text-white">Danh sách</a></li>
                                            <li><a href="#" class="text-white">Thêm sản phẩm</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Hóa đơn
                                    <div class="card-body-icon">
                                        <i class="fa fa-clipboard"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Xem Hóa Đơn</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li><a href="#" class="text-white">Danh sách</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">Người dùng
                                    <div class="card-body-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Xem Người Dùng</h5>
                                    <p class="card-text">
                                        <ul>
                                            <li><a href="#" class="text-white">Danh sách</a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end thong ke -->
                <!-- binh luan moi -->
                <div class="row">
                    <div class="col-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Cột</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Tên đăng nhập</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                    $result = $this->model->getAllThanhVien();
                    while($data = $result->fetch_assoc()){
                       echo '
                       <tr>
                       <th scope="col">1</th>
                       <th scope="col">'.$data['hoten'].'</th>
                       <th scope="col">'.$data['tendangnhap'].'</th>
                       <th scope="col">'.$data['email'].'</th>
                         </tr>
                       ';
                    }
               ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>        
    </div>
                <!-- end binh luan -->

</body>