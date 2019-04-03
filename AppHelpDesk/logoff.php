<?php
	session_start();

	/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


	//unset() - elimina um unico indice
	unset($_SESSION['x']);

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


	//session_destroy() - destroi a sessao
	// necessario um novo redirecionamento
	*/

	session_destroy();
	header('Location: index.php');
