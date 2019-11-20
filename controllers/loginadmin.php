<?php 
class Controller
{
    protected $model;
    
	public function __construct(){
		require_once('./models/model.php');
		$this->model = new Model();
	}
 
	public function index(){
		require_once('./views/admin/loginadmin.php');
	}


	public function dangnhap(){
        
		if(!empty($_POST['tendangnhapadmin']) && !empty($_POST['matkhauadmin'])){
			if($this->model->checkThanhVienAdmin($_POST['tendangnhapadmin'],$_POST['matkhauadmin'])){
			$_SESSION['admin_data'] = true;
            //header('location:quanly.php');
            require_once('./views/admin/quanly.php');    
			} else {
                
                $error3 = true;
				require_once('./views/admin/loginadmin.php');
			}
		} else {
         
            $error = true;
			require_once('./views/admin/loginadmin.php');
        }
    }
 
}

 ?>
