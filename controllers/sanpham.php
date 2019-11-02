<?php 
class Controller
{
    protected $model;
    
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
		if(!isset($_GET['id'])){
			require_once('./views/error.php');
		} else {
			$listdanhmuc = $this->model->getsDanhMuc();
			$listsanpham = $this->model->getsSanPham();
            $sanpham     = $this->model->getSanPhamByID($_GET['id']);
            
			if(is_null($sanpham)){
				require_once('./views/error.php');
			} else {
				$danhmuc = $this->model->getDanhMuc($sanpham['iddanhmuc']);
				require_once('./views/sanpham.php');
			}
		}		
	}

	public function error(){
		require_once('./views/error.php');
	}

	public function themvaogio(){
        // Kiểm tra số lượng để thêm vào giỏ hàng
		if(!empty($_POST['soluong'])){
			$sanpham = $this->model->getSanPhamByID($_POST['id']);
			$hoadonsp = array(
				$sanpham['id_sanpham'] => array(
					'id'      => $sanpham['id_sanpham'],
					'ten'     => $sanpham['ten'],
					'mausac'  => $_POST['mausac'],
					'soluong' => $_POST['soluong'],
					'gia'     => $_POST['soluong'] * $sanpham['gia'],
				)
			);
        // Thêm vào giỏ hàng
			if(!empty($_SESSION['giohang'])) {
				if(in_array($sanpham['id_sanpham'], array_keys($_SESSION['giohang']))) {
					foreach($_SESSION['giohang'] as $k => $v) {
							if($sanpham['id_sanpham'] == $k) {
								if(empty($_SESSION['giohang'][$k]['soluong'])) {
									$_SESSION['giohang'][$k]['soluong'] = 0;
                                }
                                
                                $_SESSION['giohang'][$k]['soluong'] += $_POST['soluong'];
                                
								$_SESSION['giohang']['tongtien']    += $hoadonsp[$_POST['id']]['gia'];
							}
					}
				} else {
					$_SESSION['giohang']               = $_SESSION['giohang'] + $hoadonsp;
					$_SESSION['giohang']['tongtien']   += $hoadonsp[$_POST['id']]['gia'];
				}
			} else {
				$_SESSION['giohang']               = $hoadonsp;
				$_SESSION['giohang']['tongtien']  += $hoadonsp[$_POST['id']]['gia'];
			}

			header('location:giohang.php');
		}
	}
}

 ?>