
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
      <br>

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar-sticky fixed-top px-1 col-2">
                    <!-- <div class="px-1"> -->
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-secondary">
                      <span><i class="fa fa-home"></i> Quản lý</span>

                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-muted" data-toggle="collapse" href="#qldm" role="button" aria-expanded="false" aria-controls="qldm">
                                <i class="fa fa-list-ol"></i> Danh mục
                            </a>
                        </li>
                        <div class="collapse" id="qldm">
                            <ul>
                                <li><a href="quanly.php?task=qldm">Danh sách danh mục</a></li>
                                <li><a href="quanly.php?task=tdm">Thêm danh mục</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-muted" data-toggle="collapse" href="#qlsp" role="button" aria-expanded="false" aria-controls="qlsp">
                            <i class="fa fa-cart-plus"></i> Sản phẩm</a>
                        </li>
                        <div class="collapse" id="qlsp">
                            <ul>
                                <li><a href="quanly.php?task=qlsp">Danh sách sản phẩm</a></li>
                                <li><a href="quanly.php?task=tsp">Thêm sản phẩm</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="quanly.php?task=qltv">
                                <i class="fa fa-users"></i> Người dùng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="quanly.php?task=qlhd">
                                <i class="fa fa-clipboard"></i> Hóa đơn
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-success px-3">
          <span><i class="fa fa-plus-circle"></i> Thiết lập</span>
        </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">
                                <i class="fa fa-caret-right"></i> Website
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
                    <h5 class="card-title">Số danh mục : 16</h5>
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
                    <h5 class="card-title">Số sản phẩm : 16</h5>
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
                    <h5 class="card-title">Số hóa đơn : 16</h5>
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
                    <h5 class="card-title">Số người dùng : 16</h5>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- end binh luan -->


</body>