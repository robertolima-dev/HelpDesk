<?php

	session_start();
	//trabalhando na montagem do textp
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	//abrindo arquivo
	$arquivo = fopen('../../AppHelpDesk/arquivo.hd', 'a');
	//escrevendo arquivo
	fwrite($arquivo, $texto);
	//fechando arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: abrir_chamado.php');
