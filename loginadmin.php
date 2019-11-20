<?php 
	session_start();
	require_once('./controllers/loginadmin.php');
	$controller = new Controller();
	$task = isset($_GET['task']) ? $_GET['task'] : 'error';
	switch ($task) {
		case 'index':
			$controller->index();
			break;		
		case 'dangnhap':
			$controller->dangnhap();
            break;
        
		default:
			$controller->index();
			break;
	} 

 ?>
