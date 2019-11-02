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
    <div class="col-6 pb-2">
        <?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Thêm danh mục thành công ! <a href="quanly.php?task=qldm">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Thêm danh mục không thành công !
          </div>
        <?php } ?>
        <form method="POST">
            <div class="form-group">
            <label for="ten">Tên danh mục</label>
            <input type="text" class="form-control" id="ten" placeholder="điền tên danh mục" name="ten" value="<?php echo $danhmuc['ten'] ?>">
            <?php if(isset($error_ten)) echo '<div class="invalid-feedback">Tên đăng nhập là bắt buộc</div>';?>
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" cols="30" rows="10" class="form-control" placeholder="điền mô tả cho danh mục"><?php echo $danhmuc['mota'] ?></textarea>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control" placeholder="điền link ảnh" name="anhdaidien" value="<?php echo $danhmuc['anhdaidien'] ?>">
          </div>
          <button type="submit" class="btn btn-primary">Thêm danh mục</button>
        </form>
    </div>
</div>

