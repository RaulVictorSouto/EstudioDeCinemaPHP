<?php
	require_once 'conexao.php';
	require_once 'funcionarios.php';

	$id = $_GET["id"];
	if (isset($id)){
		if (Funcionarios::deletar($pdo,$id)){
			header('Location:ver.php');
		}
	}

?>