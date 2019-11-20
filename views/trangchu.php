<?php include_once "./views/layouts/head.php"?>
<body>
   <?php include_once "./views/layouts/navigation.php"?>
   <!-------------Phần danh mục và slider-------------><br>
   <div id="cata" style="margin-top: 7.4375rem;">
      <div class="container">
         <div class="row">
            <?php include_once "./views/layouts/catagory.php"?>
            <?php include_once "./views/layouts/slider.php"?>
         </div>
      </div>
   </div>
   <br>
   <!--promotion-->
   <div class="promtion">
      <div class="container">
         <div data-v-64d23507="" data-v-0489199a="" class="row v3-promotion-block v3-content-section mt20" style="background-color: rgb(228, 228, 228);">
            <span data-v-64d23507="" class="v3-promotion-notify-icon" style="background: rgb(247, 11, 24); box-shadow: rgb(242, 113, 120) 0px 0px 0px 0px;"></span>
            <marquee data-v-64d23507="" data-track-content="" data-content-name="header-promotion-text" class="v3-header-promotion-text"><a data-v-64d23507="" href="https://phongvu.vn/promo/laptop-weeksale?pv_source=website&amp;pv_campaign=promo-1401&amp;pv_medium=header-promotion-text" data-content-piece="promo-1009" class="v3-header-promotion-text-item" style="color: rgb(215, 30, 48); text-decoration: none">
               Tuần lễ Laptop siêu ưu đãi - Giảm tới 1.400.000đ chỉ từ 8.790.000đ! Giảm thêm 5% tối đa 1 triệu
               khi quét VNPAY-QR. Duy nhất đến 10/10/2019. Mua ngay!</a>
            </marquee>
         </div>
      </div>
   </div>
   <!--promotion-->
   <br>
   <?php include_once "./views/layouts/producthot.php" ?>
   <br>
   <div class="container">
   <div class="row">
     
      <div class="col-sm-4 box">
         <a target="_blank" href="https://phongvu.vn/thuong-hieu-dien-thoai-915.cat?brands=TH000005,TH000003,TH000335&pv_source=website&pv_campaign=promo-1384&pv_medium=hp-de-hotdeal-390x190_order%3D3003_v%3D">
            <img src="https://img1.phongvu.vn/media/banner/pv-banner-390x190-2f883.jpg">
         </a>
      </div>
      <div class="col-sm-4 box">
         <a target="_blank"  href="https://phongvu.vn/promo/clearance?pv_source=website&pv_campaign=promo-1441&pv_medium=hp-de-hotdeal-390x190_order%3D1600_v%3D">
            <img src="https://img1.phongvu.vn/media/banner/pv-banner-390x190-6f481.jpg">
         </a>
      </div>
      <div class="col-sm-4 box">
         <a target="_blank"  href="https://phongvu.vn/laptop-2371.cat?pv_source=website&pv_campaign=promo-1450&pv_medium=hp-de-hotdeal-390x190_order%3D_v%3D">
         <img src="https://img1.phongvu.vn/media/banner/pv-banner-390x190-3e24c.jpg">
         </a>
      </div>
   </div>
</div>
   <?php include_once "./views/layouts/productnew.php" ?>
   <!---------------------FOOTER----------------------------------->
   <div class="line"></div>
   <br>
   <?php include_once "./views/layouts/footer.php" ?>
   <script src="public/owl carousel/jquery-3.4.1.min.js"></script>
   <script src="public/owl carousel/owl.carousel.min.js"></script>
   <script src="public/js/tab.js"></script>
   <script>
      $('.owl-carousel').owlCarousel({
                          loop:true,
                          margin:10,
                          responsiveClass:true,
                          responsive:{
                              0:{
                                  items:1,
                                  nav:true
                              },
                              600:{
                                  items:1,
                                  nav:false
                              },
                              1000:{
                                  items:1,
                                  nav:true,
                                  loop:false
                              }
                          }
      })
   </script>            
</body>