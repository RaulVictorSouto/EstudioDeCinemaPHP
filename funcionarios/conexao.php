<?php 			
	define('bd', 'estudio');
	define('host', 'localhost');
	define('usuario', 'root');
	define('senha', '');

	try{
		$pdo = new PDO('mysql:host=' .host.';dbname='.bd, usuario, senha);

	} catch (PDOException $e){
		echo "Erro ao tentar conectar-se com o banco. ERRO: " .$e->getMessage();
	}

?>