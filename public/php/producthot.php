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
                     <?php
                            $sql_sp     =   "SELECT *FROM product WHERE p_group = 'hot'";
                            $result     =    $con->query($sql_sp);
                            // kiểm tra số hàng trả về
                            if($result -> num_rows > 0) {
                                $i = 0;
                                foreach($result as $sp) {
                                    echo '
                                    <div class="col-sm-3 box">
                                        <a href="details.php?p_id='.$sp["p_id"].'" class="product">
                                            <img src="image/'.$sp["p_img"].'" class="img-responsive" style="width:100%" alt="Image">
                                            <p>'.$sp["p_name"].'</p>
                                            <p class="price">'.number_format($sp['p_gia'],0,'','.').'</p>
                                            <p><a href="details.php?p_id='.$sp["p_id"].'" class="me-btn" style="color:white">Xem Ngay</a></p>
                                        </a>
                                    </div>
                                    ';
                                    if(++$i > 3) break;
                                }

                            }
                            else {
                                echo "Không có sản phẩm nào";
                            }
                     ?>
            </div>
        </div>
        <br>
        <div class="new-all" style="text-align:center">
            <p><a href="viewall.php?p_loai=hot" class="btn btn-danger">Xem tất cả</a></p>
        </div>