
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding-0">
    <h4 style="text-align: center;">Danh mục sản phẩm</h4>
    <div class="vertical-menu">

        <?php while($data = $listDanhMuc -> fetch_assoc()){ ?>
            <a href="danhmuc.php?id= <?php echo $data['id_danhmuc']?>">
                <?php echo $data['ten'] ?>
            </a>
        <?php } ?>

    </div>
</div>
