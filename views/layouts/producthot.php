<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 style="color:red;">
                Sản Phẩm Mua Nhiều
            </h4>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <?php while($data = $listsanpham->fetch_assoc()){ ?>

            <div class="col-sm-3 box">
                <a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="product">
                    <img src= "<?php echo $data['anhdaidien'] ?>" class="img-responsive" style="width:100%" alt="Image">

                    <p><?php echo $data['ten'] ?></p>

                    <p class="price"><?php echo number_format( $data['gia'],0,'','.') ?>.000 VNĐ

                    <p><a href="sanpham.php?id=<?php echo $data['id_sanpham'] ?>" class="me-btn" style="color:white">Xem Ngay</a></p>
                </a>
            </div>

        <?php } ?>
    </div>
</div>
<br>
<div class="new-all" style="text-align:center">
    <p><a href="danhmuc.php?id=2" class="btn btn-danger">Xem tất cả</a></p>
</div>