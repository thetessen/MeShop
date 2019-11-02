<?php 
	session_start();
	require_once('./controllers/trangchu.php');

	$controller = new Controller();
	$task = isset($_GET['task']) ? $_GET['task'] : 'index';
	
	switch ($task) {
		case 'index':
			$controller->index();
			break;
		case 'user':
			$controller->user();
			break;
		default:
			$controller->index();
			break;
	}
?>