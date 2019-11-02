<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listdanhmuc 	= $this->model->getsDanhMuc();
		$danhmuc 		= $this->model->getDanhMuc($_GET['id']);
		if(is_null($danhmuc)){
			require_once('./views/error.php');
		} else {
			$listsanpham = $this->model->getsSanPhamByID($_GET['id']);
			if(is_null($listsanpham)){
				$dulieutrong = true;
			}
			require_once('./views/danhmuc.php');
		}
		
	}

	public function error(){
		require_once('./views/error.php');
	}
}

 ?>