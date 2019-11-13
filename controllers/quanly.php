<?php 
class Controller
{
    protected $model;
    
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
		require_once('./views/admin/quanly.php');
	}

	public function error(){
		require_once('./views/admin/error.php');
	}

	public function dangnhap(){
		if(!empty($_POST['tendangnhap']) && !empty($_POST['matkhau'])){
			if($this->model->checkThanhVien($_POST['tendangnhap'],$_POST['matkhau'])){
				$_SESSION['user_data'] = $this->model->getThanhVien($_POST['tendangnhap'], $_POST['matkhau']);
				header('location:index.php');
			} else {
				$error3 = true;
				require_once('./views/admin/user.php');
			}
		} else {
			$error = true;
			require_once('./views/admin/user.php');
		}
		
	}

	public function dangky(){
		$tendangnhap_error = empty($_POST['tendangnhap']) ? 'true' : null;
		$matkhau_error 	   = empty($_POST['matkhau']) ? 'true' : null;
		$hoten_error       = empty($_POST['hoten']) ? 'true' : null;
		$email_error       = empty($_POST['email']) ? 'true' : null;
		$sodienthoai_error = empty($_POST['sodienthoai']) ? 'true' : null;
		$diachi_error      = empty($_POST['diachi']) ? 'true' : null;
		// check xem có trường nào lỗi không
		if($tendangnhap_error||$matkhau_error||$hoten_error||$email_error||$sodienthoai_error||$diachi_error){
			require_once('./views/admin/user.php');
		} else {
			if($this->model->addThanhVien($_POST)){
				header('location:index.php');
			} else {
				$error2 = true;
				require_once('./views/admin/user.php');
			}
		}
	}

	public function dangxuat(){
		unset($_SESSION['user_data']);
		unset($_SESSION['giohang']);
		header('location:index.php');
	}

	public function quanlydanhmuc(){
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./views/admin/quanlydanhmuc.php');
	}

	public function themdanhmuc(){
		if(!empty($_POST['ten'])&&!empty($_POST['mota'])&&!empty($_POST['anhdaidien'])){
			if($this->model->addDanhMuc($_POST)){
				$ketqua = true;
			} else {
				$ketqua = false;
			}
		}
		require_once('./views/admin/themdanhmuc.php');
	}

	public function suadanhmuc(){
		if(isset($_GET['id'])){
			if(!is_null($this->model->getDanhMuc($_GET['id']))){
				//sửa danh mục
				if(!empty($_POST['ten'])&&!empty($_POST['mota'])&&!empty($_POST['anhdaidien'])){
					if($this->model->editDanhMuc($_POST,$_GET['id'])){
						$ketqua = true;
					} else {
						$ketqua = false;
					}
				} else {
					$error_ten = empty($_POST['ten']) ? 'true' : null;
				}
				$danhmuc = $this->model->getDanhMuc($_GET['id']);
				require_once('./views/admin/suadanhmuc.php');
			} else {
				echo 'Danh mục không tồn tại !';
			} 
		} else {
			require_once('./views/admin/error.php');
		}
	}

	public function xoadanhmuc(){
		if(isset($_GET['id'])){
			if($this->model->xoaDanhMuc($_GET['id']) && $this->model->xoaSanPhamByDanhMuc($_GET['id'])) {
				header('Location: quanly.php?task=qldm');
			}
		}
		else {
			require_once('./views/admin/error.php');
		}
	}
	public function duyethoadon(){
		echo "he";
		if(isset($_GET['id'])){
			if($this->model->duyetHoaDon($_GET['id'])) {
				header('Location: quanly.php?task=qlhd');
			}
		}
		else {
			require_once('./views/admin/error.php');
		}
	}
	public function quanlysanpham(){
		$listsanpham = $this->model->getsSanPham(50);
		require_once('./views/admin/quanlysanpham.php');
	}

	public function themsanpham(){
		$listdanhmuc = $this->model->getsDanhMuc();
		//nếu người dùng gửi request post
		if($_SERVER["REQUEST_METHOD"] == "POST"){ 
			//check xem trường dữ liệu nào trống !
			if(empty($_POST['danhmuc'])){
				$error_danhmuc = true;
			} 
			if(empty($_POST['ten'])){
				$error_ten = true;
			} 
			if(empty($_POST['gia'])){
				$error_gia = true;
			} 
			if(empty($_POST['mota'])){
				$error_mota = true;
			} 
			if(empty($_POST['anhdaidien'])){
				$error_anhdaidien = true;
			} 
			if(empty($_POST['mausac'])){
				$error_mausac = true;
			} 
			if(empty($_POST['soluong'])){
				$error_soluong = true;
			}
			//thêm sản phẩm vào database
			if(!isset($error_danhmuc)&&!isset($error_ten)&&!isset($error_gia)&&!isset($error_mota)&&!isset($error_anhdaidien)&&!isset($error_mausac)&&!isset($error_soluong)){
				if($this->model->addSanPham($_POST)){ 
					$ketqua = true;
				} else {
					$ketqua = false;
				}
			} else {
				
			}
		}
		require_once('./views/admin/themsanpham.php');
	}

	public function suasanpham(){
		if(isset($_POST['ok'])){
			if($this->model->editSanPham($_POST,$_GET['id'])){
				$ketqua=true;
			} else {
				$ketqua=false;
			}
		}
		$listdanhmuc = $this->model->getsDanhMuc();
		$sanpham = $this->model->getSanPhamById($_GET['id']);
		require_once('./views/admin/suasanpham.php');

	}
	public function xoasanpham(){
		if(isset($_GET['id'])){
			if($this->model->xoaSanPhamByID($_GET['id'])) {
				$message = "Bạn đã xóa sản phẩm thành công!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header('Location: quanly.php?task=qlsp');
			}
		}
		else {
			require_once('./views/admin/error.php');
		}
	}

	public function quanlyhoadon(){
		$listhoadon = $this->model->getsHoaDon();
		require_once('./views/admin/quanlyhoadon.php');
	}

}

 ?>
