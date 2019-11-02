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
 <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success">
  <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="quanly.php">Quản lý</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách hóa đơn</li>
      </ol>
    </nav>
</h6>
<!-- danh sach hoa don -->
<div class="row">
    <div class="col-12">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="align-middle text-center">Mã hóa đơn</th>
                    <th scope="col" class="align-middle text-center">Danh sách sản phẩm</th>
                    <th scope="col" class="align-middle text-center">Số lượng</th>
                    <th scope="col" class="align-middle text-center">Tổng tiền</th>
                    <th scope="col" class="align-middle text-center">Người đặt</th>
                    <th scope="col" class="align-middle text-center">Ngày đặt hàng</th>
                    <th scope="col" class="align-middle text-center">Tình trạng</th>
                    <th scope="col" class="align-middle text-center">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;while($hd = $listhoadon->fetch_assoc()){ ?>
                <tr>
                    <th scope="row" class="align-middle text-center"><?php echo $hd['id_hoadon'] ?></th>
                    <td class="align-middle">
                        <?php 
                        $tongtien = 0;
                        $mang_sanpham = explode('|', $hd['listidsanpham']); //Xử lý sản phẩm
                        $mang_mausac = explode('|', $hd['listmausac']);
                        foreach($mang_sanpham as $key=>$sp){ ?>
                            <li style="list-style: square;">
                                <a href="sanpham.php?id=<?php echo $sp ?>"><?php echo $this->model->getSanPham($sp)['ten'] ?></a> (<?php echo $mang_mausac[$key] ?>)
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php 
                        $mang_soluong = explode('|', $hd['listsoluongsanpham']); //Xử lý số lượng
                        foreach($mang_soluong as $sl){ ?>
                            <li style="list-style: square;">
                                <?php echo $sl ?>
                            </li>
                        <?php } ?>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['tongtien'] ?>.000 VNĐ
                    </td>
                    <td class="align-middle">
                        <a href="thanhvien.php?id=<?php echo $hd['idthanhvien'] ?>"><?php echo $this->model->getThanhVienByID($hd['idthanhvien'])['hoten'] ?></a>
                    </td>
                    <td class="align-middle">
                        <?php echo $hd['ngaygiaohang'] ?>
                    </td>
                    <td class="align-middle">
                        <?php if($hd['tinhtrang']==0) echo 'Chưa duyệt';if($hd['tinhtrang']==1) echo 'Đã duyệt';  ?>
                    </td>
                    <td class="align-middle">
                        <a href="quanly.php?task=duyethd&id=<?php echo $hd['id_hoadon'] ?>" class="btn btn-warning">Duyệt đơn</a>
                        <button class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

