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
      <?php include_once "./views/layouts/navigation.php"?>
      <!-------------Phần danh mục và slider------------->
      <br>
      <div class="container" style="margin-top: 7.4375rem;">
         <!-- hoa don -->
         <div class="row">
            <div class="col-md-6">
               <h1 class="h4">Thông tin giao hàng</h1>
               <form method="POST" action="hoadon.php?task=themhoadon">
                  <div class="form-group">
                     <label for="hoten">Họ tên</label>
                     <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ và tên" value="<?php echo $_SESSION['user_data']['hoten'] ?>">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $_SESSION['user_data']['email'] ?>">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="sodienthoai">Số điện thoại</label>
                        <input type="tel" class="form-control" id="sodienthoai" name="sodienthoai" placeholder="điền số điện thoại" value="<?php echo $_SESSION['user_data']['sodienthoai'] ?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="diachi">Địa chỉ</label>
                     <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa Chỉ Nhận" value="<?php echo $_SESSION['user_data']['diachi'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="pttt">Phương thức thanh toán</label>
                     <select id="pttt" name="thanhtoan" class="form-control">
                        <option value="0" selected>Thanh toán khi nhận hàng</option>
                        <option value="1">Thanh toán qua ATM</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                        <label class="form-check-label" for="gridCheck">
                        Đồng ý với <a href="#">Điều Khoản</a> của cửa hàng.
                        </label>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Xác nhận</button>
               </form>
            </div>
            <div class="col-md-6 border-left">
               <!-- don hang -->
               <?php 
                  if(empty($_SESSION['giohang'])){
                        echo '<h1 class="h5">Chưa có sản phẩm nào trong giỏ !</h1>';
                  } else { 
                  ?>
               <?php 
                  foreach($_SESSION['giohang'] as $key=>$data){
                  ?>
               <?php if($key!='tongtien'){ ?>
               <div class="row border-bottom py-1">
                  <div class="col-3">
                     <img src="<?php echo $this->model->getSanPhamByID($key)['anhdaidien'] ?>" alt="<?php echo $data['ten'] ?>" class="mw-100 border rounded">
                  </div>
                  <div class="col-6">
                     <p>
                        <a href="sanpham.php?id=<?php echo $key ?>">
                        <?php echo $data['ten'] ?>
                        </a> (
                        <?php echo $data['soluong'] ?>)
                     </p>
                     <p>
                        <?php echo $data['mausac'] ?>
                     </p>
                  </div>
                  <div class="col-3">
                     <?php echo $data['gia']*$data['soluong'] ?>
                  </div>
               </div>
               <?php }}} ?>
               <!-- end don hang -->
               <div class="row justify-content-between py-2">
                  <div class="col-3">Tạm tính</div>
                  <div class="col-3">
                     <?php echo number_format( $_SESSION['giohang']['tongtien'],0,'','.').".000VNĐ" ?>
                  </div>
               </div>
               <div class="row justify-content-between py-2">
                  <div class="col-3">Phí vận chuyển</div>
                  <div class="col-3">30.000 VND</div>
               </div>
               <div class="row justify-content-between border-top py-2">
                  <div class="col-3 h6">Tổng cộng</div>
                  <div class="col-3 h6">
                     <?php echo number_format( $_SESSION['giohang']['tongtien']+30,0,'','.') .".000VNĐ" ?>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <br>
         <br>
         <br>
         <div class="line"></div>
         <?php require_once('./views/layouts/footer.php'); ?>
      </div>
   </body>
