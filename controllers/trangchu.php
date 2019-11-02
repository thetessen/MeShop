<?php 
class Controller
{
	protected $model;

	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
        $listDanhMuc 	= $this->model->getsDanhMuc();
        
        $listsanpham 	= $this->model->getsSanPham();
        
        $listiAsus 		= $this->model->getASUS();
        
		$listMac		= $this->model->getMac();

		require_once('./views/trangchu.php');
	}

	public function user(){
		require_once('./views/admin/user.php');
	}
}

 ?>