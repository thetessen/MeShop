<?php 
	session_start();
	require_once('./controllers/danhmuc.php');
	$controller = new Controller();
	
	$task = isset($_GET['id']) ? $_GET['id'] : 'error';
	switch ($task) {
		case 'error':
			$controller->error();
			break;
		
		default:
			$controller->index();
			break;
	}
?>