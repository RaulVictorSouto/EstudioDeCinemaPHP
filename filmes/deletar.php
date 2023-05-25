<?php
	require_once 'conexao.php';
	require_once 'filmes.php';

	$id = $_GET["id"];
	if (isset($id)){
		if (Filme::deletar($pdo,$id)){
			header('Location:ver.php');
		}
	}

?>