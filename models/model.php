<?php 
class Model
{
	protected $host, $db, $user, $pass, $conn;

	// Kết nối DB
	public function __construct(){
		$this->host 	=	 'localhost';
		$this->db 		= 	 'meshop';
		$this->user 	= 	  'root';
		$this->pass 	= 		'';
		$this->conn 	= new mysqli($this->host, $this->user, $this->pass, $this->db);

		if($this->conn->connect_error){
			die($this->conn->connect_error);
		}

		$this->conn->set_charset("utf8");
	}
	// Lấy ra danh mục
	public function getsDanhMuc(){
		$sql = "SELECT * FROM danhmuc";
		$result = $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}	
	}

	public function getDanhMuc($id){
		$sql 	= "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
		$result = $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}
	// Lấy ra danh mục

	// Lấy ra sản phẩm
	public function getsSanPham($limit = 4){
		$sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT $limit";
		$result = $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsSanPhamByCata($id, $limit = 4){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc = $id ORDER BY id_sanpham DESC LIMIT $limit";
		$result = $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	
	public function getSanPhamByID($id){
		$sql = "SELECT * FROM sanpham WHERE id_sanpham = $id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}

	public function getASUS(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc = 2 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getMac(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc = 5 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}
	// Lấy ra sản phẩm

	public function getsHoaDon($limit=5){
		$sql	 = "SELECT * FROM hoadon LIMIT $limit";
		$result  =  $this->conn->query($sql);

		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}
	
	public function getSearch($name) {
		$sql_sp=mysqli_query($this->conn,'select * from sanpham where ten LIKE "%'.$name.'%"');
		return $sql_sp;
	}

	public function getThanhVien($tendangnhap, $matkhau){
		$pas = md5($matkhau);
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$pas'";	
		$result = $this->conn->query($sql);

		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}
	public function getAllThanhVien(){
		$sql = "SELECT * FROM thanhvien";	
		$result = $this->conn->query($sql);

		if($result->num_rows > 0)
			return $result;
		return false;
	}

	public function getThanhVienByID($id){
		$sql = "SELECT * FROM thanhvien WHERE id_thanhvien=$id";	
		$result = $this->conn->query($sql);

		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}

	public function checkThanhVien($tendangnhap,$matkhau){
		$pas = md5($matkhau);
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$pas'";		
		$result = $this->conn->query($sql);

		if($result->num_rows > 0)
			return true;
		return false;
	}

	public function addThanhVien($thongtin){
		$pas = md5($thongtin['matkhau']);
		$sql = "INSERT INTO thanhvien (tendangnhap,matkhau,hoten,email,sodienthoai,diachi) VALUES ('".$thongtin['tendangnhap']."','".$pas."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."')";
	
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addDanhMuc($thongtin){
		$sql = "INSERT INTO danhmuc (id_danhmuc,ten,mota,anhdaidien) VALUES ('".$thongtin['id']."','".$thongtin['ten']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addSanPham($thongtin){
		$sql = "INSERT INTO sanpham (ten,gia,mota,anhdaidien,mausac,soluong,iddanhmuc) VALUES ('".$thongtin['ten']."','".$thongtin['gia']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."','".$thongtin['mausac']."','".$thongtin['soluong']."','".$thongtin['danhmuc']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addHoaDon($thongtin){
		$sql = "INSERT INTO hoadon (listidsanpham,listsoluongsanpham,listmausac,tongtien,idthanhvien,ngaygiaohang,hoten,email,sodienthoai,diachi,phuongthuc) VALUES ('".$thongtin['listidsanpham']."','".$thongtin['listsoluongsanpham']."','".$thongtin['listmausac']."','".$thongtin['tongtien']."','".$thongtin['idthanhvien']."','".$thongtin['ngaygiaohang']."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."','".$thongtin['phuongthuc']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function countSanPham($id_danhmuc){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id_danhmuc";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->num_rows;
		} else {
			return 0;
		}
	}


	public function editDanhMuc($thongtin, $id){
		$sql = "UPDATE danhmuc 
				SET ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
					anhdaidien='".$thongtin['anhdaidien']."' 
				WHERE id_danhmuc=".$id;	

		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function xoaDanhMuc($id){
		// sql to delete a record
		$sql =  "DELETE FROM danhmuc WHERE id_danhmuc=$id";
		if ($this->conn->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	public function xoaSanPhamByDanhMuc($id){
		$sql = "DELETE FROM `sanpham` WHERE `sanpham`.`iddanhmuc` = $id";
		if ($this->conn->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	public function xoaSanPhamByID($id){
		$sql = "DELETE FROM `sanpham` WHERE `sanpham`.`id_sanpham` = $id";
		if ($this->conn->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	public function duyetHoaDon($id){
		$sql = "DELETE FROM `hoadon` WHERE `hoadon`.`id_hoadon` = $id";
		if ($this->conn->query($sql) === TRUE) {
			return true;
		} else {
			return false;
		}
	}
	public function editSanPham($thongtin, $id){
		$sql = "UPDATE sanpham SET 
		ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
		gia='".$thongtin['gia']."',
		anhdaidien='".$thongtin['anhdaidien']."',
		mausac='".$thongtin['mausac']."',
		soluong='".$thongtin['soluong']."',
		iddanhmuc='".$thongtin['danhmuc']."' WHERE id_sanpham=".$id;
		
		$result = $this->conn->query($sql);

		if($result) return true;
		return false;
	}

}

 ?>

