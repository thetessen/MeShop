<?php 
	session_start();
	require_once('./controllers/search.php');

	$controller = new Controller();
	$task = isset($_GET['task']) ? $_GET['task'] : 'index';
	
	switch ($task) {
		case 'index':
			$controller->index();
			break;
		default:
			$controller->index();
			break;
	}
?>