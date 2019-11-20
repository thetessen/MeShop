<?php if(!isset($_SESSION['admin_data'])){  
      header('location:loginadmin.php');
}  else   {   ?>
   <?php include_once 'header.php'?>  
      <div class="col-md-10">
         <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-2 text-success" style="border-bottom: 1px dashed #ccc">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quản lý</li>
               </ol>
            </nav>
         </h6>
       
       
         <!-- thong ke -->
         <div class="row">
            <div class="col-12">
               <div class="card-deck m-0">
                  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                     <div class="card-header">
                        Danh mục
                        <div class="card-body-icon">
                           <i class="fa fa-list-ol"></i>
                        </div>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Xem Danh Mục</h5>
                        <p class="card-text">
                        <ul>
                           <li><a href="quanly.php?task=qldm" class="text-white">Danh sách</a></li>
                           <li><a href="quanly.php?task=tdm" class="text-white">Thêm danh mục</a></li>
                        </ul>
                        </p>
                     </div>
                  </div>
                  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                     <div class="card-header">
                        Sản phẩm
                        <div class="card-body-icon">
                           <i class="fa fa-cart-plus"></i>
                        </div>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Xem Sản Phẩm</h5>
                        <p class="card-text">
                        <ul>
                           <li><a href="quanly.php?task=qlsp" class="text-white">Danh sách</a></li>
                           <li><a href="quanly.php?task=tsp" class="text-white">Thêm sản phẩm</a></li>
                        </ul>
                        </p>
                     </div>
                  </div>
                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                     <div class="card-header">
                        Hóa đơn
                        <div class="card-body-icon">
                           <i class="fa fa-clipboard"></i>
                        </div>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Xem Hóa Đơn</h5>
                        <p class="card-text">
                        <ul>
                           <li><a href="quanly.php?task=qlhd" class="text-white">Danh sách</a></li>
                        </ul>
                        </p>
                     </div>
                  </div>
                  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                     <div class="card-header">
                        Người dùng
                        <div class="card-body-icon">
                           <i class="fa fa-users"></i>
                        </div>
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Xem Người Dùng</h5>
                        <p class="card-text">
                        <ul>
                           <li><a href="quanly.php?task=qltv" class="text-white">Danh sách</a></li>
                        </ul>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end thong ke -->
         <!-- binh luan moi -->
         <div class="row">
            <div class="col-12">
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">Cột</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Email</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $result = $this->model->getAllThanhVien();
                        while($data = $result->fetch_assoc()){
                           echo '
                           <tr>
                           <th scope="col">1</th>
                           <th scope="col">'.$data['hoten'].'</th>
                           <th scope="col">'.$data['tendangnhap'].'</th>
                           <th scope="col">'.$data['email'].'</th>
                             </tr>
                           ';
                        }
                        ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<?php } ?>  
     
</body>
</html>
