<?php 
class Controller
{
	protected $model;

	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}
	// Lấy số lượng sản phẩm người dùng đặt
	public function listsoluong($data){
		$mang_soluong = array();
		foreach ($data as $key => $value) {
			if($key != 'tongtien'){
				array_push($mang_soluong,$data[$key]['soluong']);
			}
		}
		$soLuong = implode('|', $mang_soluong);
		return $soLuong;
	}

	public function listmausac($data){
		$mang_mausac = array();
		foreach ($data as $key => $value) {
			if($key!='tongtien'){
				array_push($mang_mausac,$data[$key]['mausac']);
			}
		}
		$mauSac = implode('|', $mang_mausac);
		return $mauSac;
	}

	public function index(){
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./views/hoadon.php');
	}

	public function error(){
		require_once('./views/error.php');
	}

	public function themhoadon(){
		$mang_sanpham = $_SESSION['giohang'];
		unset($mang_sanpham['tongtien']);
		$data = array(
			'listidsanpham' => implode('|', array_keys($mang_sanpham)),
			'listsoluongsanpham' => $this->listsoluong($_SESSION['giohang']),
			'listmausac' => $this->listmausac($_SESSION['giohang']),
			'tongtien' => $_SESSION['giohang']['tongtien'],
			'idthanhvien' => $_SESSION['user_data']['id_thanhvien'],
			'ngaygiaohang' => date('Y-m-d'),
			'hoten' => $_POST['hoten'],
			'email' => $_POST['email'],
			'sodienthoai' => $_POST['sodienthoai'],
			'diachi' => $_POST['diachi'],
			'thanhtoan' => $_POST['thanhtoan'],
			'phuongthuc' => $_POST['thanhtoan'],
		);

		if($this->model->addHoaDon($data)){
			header('Location:pay.php');
		} else {
			echo 'Lỗi';
		}
	}
}

 ?>