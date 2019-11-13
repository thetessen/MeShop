<?php include_once 'header.php'?>
<!-- thêm danh mục mới -->
<div class="container" style="margin-left: 230px; margin-top: -19px">
   <div class="row">
      <div class="col-6 pb-2">
         <?php if(isset($ketqua)&&$ketqua){ ?>
         <div class="alert alert-success" role="alert" style="margin-top: 150px;">
            Thêm danh mục thành công ! <a href="quanly.php?task=qldm">Xem</a>
         </div>
         <?php } elseif(isset($ketqua)&&!$ketqua) { ?>
         <div class="alert alert-danger" role="alert">
            Thêm danh mục thất bại !
         </div>
         <?php } ?>
         <form method="POST">
            <div class="form-group">
               <label for="id">Id danh mục</label>
               <input type="number" class="form-control" id="id" placeholder="điền id danh mục" name="id">
            </div>
            <div class="form-group">
               <label for="ten">Tên danh mục</label>
               <input type="text" class="form-control" id="ten" placeholder="điền tên danh mục" name="ten">
            </div>
            <div class="form-group">
               <label for="mota">Mô tả</label>
               <textarea name="mota" id="mota" cols="30" rows="10" class="form-control" placeholder="điền mô tả cho danh mục"></textarea>
            </div>
            <div class="form-group">
               <label for="anhdaidien">Ảnh đại diện</label>
               <input type="text" class="form-control" placeholder="điền link ảnh" name="anhdaidien">
            </div>
            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
         </form>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>