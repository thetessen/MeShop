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
		$search = $this->model->gettempSearch($_GET["name"]);	
		require_once('./views/search.php');
	}
}
 ?>
