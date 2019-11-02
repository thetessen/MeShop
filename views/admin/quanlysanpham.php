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

<!-- quan ly san pham -->
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số hóa đơn</th>
                    <th scope="col">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
            	<?php $i=1;while($sanpham = $listsanpham->fetch_assoc()){ ?>
                <tr>
                    <th scope="row"><?php echo $i;$i++ ?></th>
                    <td><?php echo $sanpham['ten'] ?></td>
                    <td>10</td>
                    <td>
                        <a href="quanly.php?task=ssp&id=<?php echo $sanpham['id_sanpham'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="quanly.php?task=xsp&id=<?php echo $sanpham['id_sanpham'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            	<?php } ?>
            </tbody>
        </table>
    </div>
</div>
