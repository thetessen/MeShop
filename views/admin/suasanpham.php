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
<!-- Thêm sản phẩm mới -->
<div class="row">
    <div class="col-6 pb-2">
    	<?php if(isset($ketqua)&&$ketqua){ ?>
        <div class="alert alert-success" role="alert">
          Sửa sản phẩm thành công ! <a href="sanpham.php?id=<?php echo $_GET['id'] ?>">Xem</a>
        </div>
        <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
          <div class="alert alert-danger" role="alert">
            Sửa sản phẩm thất bại !
          </div>
        <?php } ?>
        <form method="POST">
   		  <div class="form-group">
   		  	<label for="danhmuc">Danh mục</label>
   		  	<select name="danhmuc" id="danhmuc" class="form-control <?php if(isset($error_danhmuc)) echo 'is-invalid'; ?>">
   		  		<?php while($dm = $listdanhmuc->fetch_assoc()){ ?>
   		  		<option value="<?php echo $dm['id_danhmuc'] ?>" <?php if($dm['id_danhmuc']==$sanpham['iddanhmuc']) echo 'selected' ?>><?php echo $dm['ten'] ?></option>
   		  		<?php } ?>
   		  	</select>
   		  	<div class="invalid-feedback">Bạn phải chọn danh mục cho sản phẩm</div>
   		  </div>	
          <div class="form-group">
            <label for="ten">Tên sản phẩm</label>
            <input type="text" class="form-control <?php if(isset($error_ten)) echo 'is-invalid'; ?>" id="ten" placeholder="điền tên sản phẩm" <?php echo 'value="'.$sanpham['ten'].'"' ?> name="ten">
            <div class="invalid-feedback">Tên sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="gia">Giá sản phẩm (đơn vị : 000VNĐ)</label>
            <input type="number" class="form-control <?php if(isset($error_gia)) echo 'is-invalid'; ?>" id="gia" placeholder="điền giá của sản phẩm" <?php echo 'value="'.$sanpham['gia'].'"' ?> name="gia">
            <div class="invalid-feedback">Giá sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mota">Mô tả</label>
            <textarea name="mota" id="mota" rows="5" class="form-control <?php if(isset($error_mota)) echo 'is-invalid'; ?>" placeholder="viết mô tả cho sản phẩm"><?php echo $sanpham['mota'] ?></textarea>
            <div class="invalid-feedback">Mô tả không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="anhdaidien">Ảnh đại diện</label>
            <input type="text" class="form-control <?php if(isset($error_anhdaidien)) echo 'is-invalid'; ?>" name="anhdaidien" <?php echo 'value="'.$sanpham['anhdaidien'].'"' ?> placeholder="điền link ảnh đại diện">
            <div class="invalid-feedback">Ảnh đại diện không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="mausac">Màu sắc</label>
            <input type="text" class="form-control <?php if(isset($error_mausac)) echo 'is-invalid'; ?>" id="mausac" placeholder="mỗi màu sắc cách nhau bởi dấu |" <?php echo 'value="'.$sanpham['mausac'].'"' ?> name="mausac">
            <div class="invalid-feedback">Màu sắc sản phẩm không được bỏ trống</div>
          </div>
          <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="number" min="0" class="form-control <?php if(isset($error_soluong)) echo 'is-invalid'; ?>" id="soluong" placeholder="điền số lượng sản phẩm có trong kho" <?php echo 'value="'.$sanpham['soluong'].'"' ?> name="soluong">
            <div class="invalid-feedback">Số lượng sản phẩm không được bỏ trống</div>
          </div>
          <button type="submit" class="btn btn-primary" name="ok">Sửa sản phẩm</button>
        </form>
    </div>
</div>

