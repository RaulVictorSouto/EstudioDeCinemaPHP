<?php
	require_once 'conexao.php';
	require_once 'filmes.php';

	if (isset($_REQUEST['enviar'])){
		extract($_REQUEST);
		$user = new Filme($_GET);
		$user->cadastrar($pdo);

		?>
			<script type="text/javascript">
				alert("O filme foi cadastrado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Clientes</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
</head>
<body>
	<h1>Cadastrar Filmes</h1>
	
	<form method="get">
		<div class="formulario">
		Título:<br>
		<input type="text" name="nome" required class="text-box7"><br><br>
		Genero:<br>
		<input type="text" name="genero"  required class="text-box7"><br><br>
		Diretores:<br>
		<input type="text" name="diretores" required class="text-box7"><br><br>
		Roteiristas:<br>
		<input type="text" name="roteirirstas" required class="text-box7"><br><br>
		Atores:<br>
		<input type="text" name="atores" required class="text-box7"><br><br>
		Trilha Sonora:<br>
		<input type="text" name="trilhasonora" required class="text-box7"><br><br>
		Diretor de Arte:<br>
		<input type="text" name="diretordearte" required class="text-box7"><br><br>
		Engenheiro de Som:<br>
		<input type="text" name="engenheirodesom" required class="text-box7"><br><br>
		Veículo de Mídia:<br>
		<input type="text" name="veiculodemidia" required class="text-box7"><br><br>
		Distribuição:<br>
		<input type="text" name="distrubuicao" required class="text-box7"><br><br>
	</div>
	<div class="voltar">
		<input type="submit" name="enviar" value="Cadastrar novo filme" class="butto">
	</form>
	<a href="ver.php">Voltar</a>
</div>

</body>
</html>