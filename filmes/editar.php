<?php
	require_once 'conexao.php';
	require_once 'filmes.php';

	$id = $_GET['id'];
	$user = Filme::selecionar($pdo, $id);

	if (isset($_REQUEST['enviar'])) {
		extract($_REQUEST);
		$user = new Filme($_POST);
		$user->editar($pdo, $id);

		?>
			<script type="text/javascript">
				alert("O filme foi atualizado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Filmes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
	</style>
</head>
<body>
	<h1>Editar Filmes</h1>
	<form method="POST">
		Nome:<br>
		<input type="text" name="nome" value="<?php echo $user['nome'] ?>" class="text-box7" ><br><br>
		Genero:<br>
		<input type="text" name="genero" value="<?php echo $user['genero'] ?>" class="text-box7" ><br><br>
		Diretores:<br>
		<input type="text" name="diretores" value="<?php echo $user['diretores'] ?>" class="text-box7"><br><br>
		Roteiristas:<br>
		<input type="text" name="roteirirstas" value="<?php echo $user['roteirirstas'] ?>" class="text-box7" ><br><br>
		Atores:<br>
		<input type="text" name="atores" value="<?php echo $user['atores'] ?>" class="text-box7" ><br><br>
		Trilha Sonora:<br>
		<input type="text" name="trilhasonora" value="<?php echo $user['trilhasonora'] ?>" class="text-box7" ><br><br>
		Diretor de Arte:<br>
		<input type="text" name="diretordearte" value="<?php echo $user['diretordearte'] ?>" class="text-box7" ><br><br>
		Engenheiro de Som:<br>
		<input type="text" name="engenheirodesom" value="<?php echo $user['engenheirodesom'] ?>" class="text-box7" ><br><br>
		Veículo de Som:<br>
		<input type="text" name="veiculodemidia" value="<?php echo $user['veiculodemidia'] ?>" class="text-box7" ><br><br>
		Distribuição:<br>
		<input type="text" name="distrubuicao" value="<?php echo $user['distrubuicao'] ?>" class="text-box7" ><br><br>
<div class="voltar">
		<input type="submit" name="enviar" value="Atualizar Filme" class="butto0">
		
	</form>
<a href="ver.php">Voltar</a>

</div>

</body>
</html>

