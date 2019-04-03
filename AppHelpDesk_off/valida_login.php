<?php
	
	//importante esse comando estar como primeira instrução no php 
	session_start();


	//verifica se a autenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

	//usuarios do sistema - estatica
	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 3, 'email' => 'roberto@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'ulisses@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
	);

	foreach($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
		}

	}

	if($usuario_autenticado) {
		echo 'Usuario autenticado';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $usuario_id;
		$_SESSION['perfil_id'] = $usuario_perfil_id;
		header('location: home.php');

	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('location: index.php?login=erro');
	}
	

