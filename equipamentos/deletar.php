<?php
	require_once 'conexao.php';
	require_once 'equipamentos.php';

	$id = $_GET["id"];
	if (isset($id)){
		if (Equipamentos::deletar($pdo,$id)){
			header('Location:ver.php');
		}
	}

?>