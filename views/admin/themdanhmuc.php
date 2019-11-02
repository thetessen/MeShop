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

<!-- thêm danh mục mới -->
<div class="row">
    <div class="col-6 pb-2">
        <?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Thêm danh mục thành công ! <a href="quanly.php?task=qldm">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Thêm danh mục thất bại !
          </div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
            <label for="ten">Tên danh mục</label>
            <input type="text" class="form-control" id="ten" placeholder="điền tên danh mục" name="ten">
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" cols="30" rows="10" class="form-control" placeholder="điền mô tả cho danh mục"></textarea>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control" placeholder="điền link ảnh" name="anhdaidien">
          </div>
          <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        </form>
    </div>
</div>
