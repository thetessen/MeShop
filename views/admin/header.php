<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>MeShop</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <link rel=icon href=logo.png sizes="16x16" type="image/png">
      <style>
         body {
         margin-top: 56px;
         }
         .sidebar-sticky { 
         z-index: 0 !important;
         margin-top:56px;min-height: 100%;border-right: 1px solid #ccc;
         }
         input {
         max-width: 100%;
         }
         .card-body-icon {
         position: absolute;
         z-index: 0;
         top: -1.25rem;
         right: -1rem;
         opacity: 0.4;
         font-size: 5rem;
         -webkit-transform: rotate(15deg);
         transform: rotate(15deg);
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-light bg-white shadow-sm fixed-top" style="background: #272e79 !important;">
         <a class="navbar-brand" href="quanly.php">
         <img src="./logo.png" alt="logo" style="width:40px;">
         </a>
      </nav>
      <!-- main -->
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-2">
         <div class="sidebar-sticky fixed-top px-1 col-2" style="margin-top: 50px;">
            <!-- <div class="px-1"> -->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1  text-secondary">
               <span><i class="fa fa-home"></i> Quản lý</span>
            </h6>
            <ul class="nav flex-column">
               <li class="nav-item">
                  <a class="nav-link text-muted" data-toggle="collapse" href="#qldm" role="button" aria-expanded="false" aria-controls="qldm">
                  <i class="fa fa-list-ol"></i> Danh mục
                  </a>
               </li>
               <div class="collapse" id="qldm">
                  <ul>
                     <li><a href="quanly.php?task=qldm">Danh sách danh mục</a></li>
                     <li><a href="quanly.php?task=tdm">Thêm danh mục</a></li>
                  </ul>
               </div>
               <li class="nav-item">
                  <a class="nav-link text-muted" data-toggle="collapse" href="#qlsp" role="button" aria-expanded="false" aria-controls="qlsp">
                  <i class="fa fa-cart-plus"></i> Sản phẩm</a>
               </li>
               <div class="collapse" id="qlsp">
                  <ul>
                     <li><a href="quanly.php?task=qlsp">Danh sách sản phẩm</a></li>
                     <li><a href="quanly.php?task=tsp">Thêm sản phẩm</a></li>
                  </ul>
               </div>
               <li class="nav-item">
                  <a class="nav-link text-muted" href="quanly.php?task=qltv">
                  <i class="fa fa-users"></i> Người dùng
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-muted" href="quanly.php?task=qlhd">
                  <i class="fa fa-clipboard"></i> Hóa đơn
                  </a>
               </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-success px-3">
               <span><i class="fa fa-plus-circle"></i> Thiết lập</span>
            </h6>
            <ul class="nav flex-column mb-2">
               <li class="nav-item">
                  <a class="nav-link text-muted" href="#">
                  <i class="fa fa-caret-right"></i> Website
                  </a>
               </li>
            </ul>
         </div>
      </div>