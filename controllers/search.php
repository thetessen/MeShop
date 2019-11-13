<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listSanPham = $this->model->getSearch($_GET["name"]);
		//print_r($listSanPham->fetch_assoc());
		require_once('./views/search.php');
	}
}
 ?>