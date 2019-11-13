<?php include_once "./views/layouts/head.php"?>
<body>
   <?php include_once "./views/layouts/navigation.php"?>
   <!-------------Phần danh mục và slider------------->
   <br>
   <div id="cata" style="margin-top: 7.4375rem;">
   <div class="container">
      <div class="row">
         <?php 
            if(!isset($listSanPham)){
               echo '<h2 class="center">Không tìm thấy sản phẩm nào !</h2>';
            } else { 
               while($data = $listSanPham->fetch_assoc()){
            ?>
         <div class="col-sm-3 box">
            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="product">
               <img src= "<?php echo $data['anhdaidien'] ?>" class="img-responsive" style="width:100%" alt="Image">
               <p><?php echo $data['ten'] ?></p>
               <?php echo  number_format( $data['gia'], 0, ',', '.'). ".000VNĐ" ?>
               <p>
            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="me-btn" style="color:white">Xem Ngay</a></p>
            </a>
         </div>
         <?php } } ?>
      </div>
   </div>
   <!---------------------FOOTER----------------------------------->
   <div class="line"></div>
   <br>
   <?php include_once "./views/layouts/footer.php" ?>
   <script src="public/owl carousel/jquery-3.4.1.min.js"></script>
   <script src="public/owl carousel/owl.carousel.min.js"></script>
   <script src="public/js/tab.js"></script>
</body>
</html>
