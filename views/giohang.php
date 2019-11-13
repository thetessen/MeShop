<?php 
       if (isset($_POST['action']) && $_POST['action']=="change"){
           foreach($_SESSION["giohang"] as &$value){
             if($value['ten'] === $_POST["code"]){
                 $value['soluong'] = $_POST["quantity"];
                 break; // Stop the loop after we've found the product
             }
         }
       }
       ?>
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet' type='text/css' media='screen' href='public/css/style1.css'>
      <link rel='stylesheet' type='text/css' media='screen' href='public/css/shoppingcart.css'>
   </head>
   <body>
      <?php include_once "./views/layouts/navigation.php"?>
      <!-------------Phần danh mục và slider------------->
      <br>
      <div class="container" style="margin-top: 7.4375rem;">
         <h3>Sản Phẩm</h3>
         <div class="shopping-cart">
            <div class="column-labels">
               <label class="product-image">Image</label>
               <label class="product-details">Product</label>
               <label class="product-price">Giá</label>
               <label class="product-quantity">Số Lượng</label>
               <label class="product-removal">Xóa sản phẩm</label>
               <label class="product-line-price">Tổng</label>
            </div>
            <?php 
               $tol_tal = 0;
               if(empty($_SESSION['giohang'])){
                       echo '<h1 class="h5">Chưa có sản phẩm nào trong giỏ !</h1>';
               } else { 
               ?>
            <?php 
               foreach($_SESSION['giohang'] as $key=>$data){
               ?>
            <?php 
               if($key != 'tongtien'){ 
               ?>
            <div class="product">
               <!--        HÌNH ẢNH SP   -->
               <div class="product-image">
                  <img src="<?php echo $this->model->getSanPhamByID($key)['anhdaidien']?>" class="mw-100 border rounded">
               </div>
               <!--        Chi TIẾT SP   -->
               <div class="product-details">
                  <div class="product-title">
                     <a class="h6 font-weight-bold" href="sanpham.php?id=<?php echo $key ?>">
                     <?php echo $data['ten'] ?>
                     </a>
                     <?php echo '('.$data['mausac'].')' ?>
                  </div>
               </div>
               <!--        GIÁ SP   -->
               <div class="product-price">
                  <?php echo number_format( $data['gia'],0,'','.') ?>.000 VNĐ
               </div>
               <!--        SỐ LƯỢNG SP   -->
               <div class="product-quantity">
                  <form method="post">
                     <input type="hidden" name="code" value= "<?php echo $data['ten'] ?>"/>
                     <input type="hidden" name="action" value="change" />
                     <select name="quantity" onchange="this.form.submit()">
                        <option <?php if($data['soluong']==1) echo "selected";?> value="1">1</option>
                        <option <?php if($data['soluong']==2) echo "selected";?> value="2">2</option>
                        <option <?php if($data['soluong']==3) echo "selected";?> value="3">3</option>
                        <option <?php if($data['soluong']==4) echo "selected";?> value="4">4</option>
                        <option <?php if($data['soluong']==5) echo "selected";?> value="5">5</option>
                     </select>
                  </form>
               </div>
               <!-- XÓa sản phẩm-->
 <button name="delete" class="btn btn-danger btn-xs delete" code="<?php echo $data['ten']?>">Xóa</button>
               <!--- GIÁ TIỀN SẢN PHẨM ---->
               <div class="product-line-price">
                  <?php 
                     $tol_tal += $data['soluong'] * $data['gia'];
                     echo number_format( $data['soluong'] * $data['gia'],0,'','.'). ".000VNĐ";
                     ?>
               </div>
            </div>
            <?php }}} ?>
            <div class="totals-item totals-item-total" style="float:right;">
               <label>Tổng Thanh Toán</label>
               <div class="totals-value" id="cart-total">
                  <?php if(!empty($_SESSION['giohang'])) echo number_format($tol_tal,0,'','.') ?>.000 VNĐ
               </div>
            </div>
            <?php
               if(!empty($_SESSION["giohang"])) {
                   if ($tol_tal > 0 )
                     echo '<a href="hoadon.php" class="checkout btn-block" style="text-decoration:none; text-align:center;">Mua Ngay</a>';
               }
            ?>
         </div>
         <br><br>
      </div>
      <!---------------------FOOTER----------------------------------->
      <div class="line"></div>
      <br>
      <?php include_once "./views/layouts/footer.php" ?>
      <script src="js/tab.js"></script>
      <script src="js/shoppingcart.js"></script>
        <script>

               
               $(document).on('click', '.delete', function(){
                  var action = 'remove';
                  var code = $(this).attr("code");
                  console.log(code);
                  if(confirm("Bạn có chắc muốn xóa sản phẩm?"))
                  {
                     $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{code:code, action:action},
                        success:function()
                        {
                           
                           alert("Item has been removed from Cart");
                           $('body').load('giohang.php');
                        }
                     })
                  }
                  else
                  {
                     return false;
                  }
              });
      </script>
   </body>
