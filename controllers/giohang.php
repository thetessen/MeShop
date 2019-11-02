<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listdanhmuc = $this->model->getsDanhMuc();
		require_once('./views/giohang.php');
	}

	public function error(){
		require_once('./views/error.php');
	}
}
 ?>