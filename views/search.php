<?php include_once "./views/layouts/head.php"?>
<body>
   <?php include_once "./views/layouts/navigation.php"?>
   <!-------------Phần danh mục và slider------------->
   <br>
   <?php
         $con = mysqli_connect("localhost", "root", "", "meshop");
         $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
         $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
         $offset = ($current_page - 1) * $item_per_page;        
         $sql	 = "SELECT *  FROM sanpham WHERE ten LIKE '%$search%' ORDER BY id_sanpham ASC  LIMIT $item_per_page" . " OFFSET " . $offset;
         $products = $con->query($sql);
         $totalRecords = $listSanPham->num_rows;
         $totalPages = ceil($totalRecords / $item_per_page);      
         ?>      
   <div id="cata" style="margin-top: 7.4375rem;">
   <div class="container">
      <div class="row">
         <?php  
            if($listSanPham->num_rows == 0){   
               echo '<h2 class="center">Không tìm thấy sản phẩm nào !</h2>';
            } else  {               
               while($data =  mysqli_fetch_array($products)){  
         ?>
         <div class="col-sm-3 box">
            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="product">
               <img src= "<?php echo $data['anhdaidien'] ?>" class="img-responsive" style="width:100%" alt="Image">
               <p><?php echo $data['ten'] ?></p>
               <p class="alignCenter"><?php echo number_format( $data['gia'], 0, ',', '.'). ".000VNĐ" ?></p>
               <p>
            <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="me-btn" style="color:white">Xem Ngay</a></p>
            </a>
         </div>
         <?php } ?> 
      <?php  } ?>
      </div>
   </div>
   </div> 
   <?php if($listSanPham->num_rows>=5) {?>
      <div class="clear-both" style = "clear: both"></div>
      <?php
      include "./views/layouts/pagination.php";
      ?>
      <div class="clear-both"  style = "clear: both"></div> 
      <?php  } ?>
   <!---------------------FOOTER----------------------------------->
   <div class="line"></div>
   <br>
   <?php include_once "./views/layouts/footer.php" ?>
   <script src="public/owl carousel/jquery-3.4.1.min.js"></script>
   <script src="public/owl carousel/owl.carousel.min.js"></script>
   <script src="public/js/tab.js"></script>
</body>
</html>
