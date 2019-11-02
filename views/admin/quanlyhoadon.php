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
                                <a href="sanpham.php?id=<?php echo $sp ?>"><?php echo $this->model->getSanPhamById($sp)['ten'] ?></a> (<?php echo $mang_mausac[$key] ?>)
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
                            <a href="quanly.php?task=duyethd&id=<?php echo $hd['id_hoadon'] ?>" class="btn btn-warning">Duyệt đơn</a>
                        </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

