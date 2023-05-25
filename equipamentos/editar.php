<?php
	require_once 'conexao.php';
	require_once 'equipamentos.php';

	$id = $_GET['id'];
	$user = equipamentos::selecionar($pdo, $id);

	if (isset($_REQUEST['enviar'])) {
		extract($_REQUEST);
		$user = new Equipamentos($_POST);
		$user->editar($pdo, $id);

		?>
			<script type="text/javascript">
				alert("O equipamento foi atualizado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Equipamento</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
	</style>
</head>
<body>
	<h1>Atualizar Equipamento</h1>
	<form method="POST">
		Tipo:<br>
		<input type="text" name="tipo" value="<?php echo $user['tipo'] ?>" class="text-box7" ><br><br>
		Marca:<br>
		<input type="text" name="marca" value="<?php echo $user['marca'] ?>" class="text-box7" ><br><br>
		Modelo:<br>
		<input type="text" name="modelo" value="<?php echo $user['modelo'] ?>" class="text-box7"><br><br>
		Informações Tecnicas:<br>
		<input type="text" name="informacoes" value="<?php echo $user['informacoes'] ?>" class="text-box7" ><br><br>
		Estado Atual:<br>
		<input type="text" name="estado" value="<?php echo $user['estado'] ?>" class="text-box7" ><br><br>
		<div class="voltar">
		<input type="submit" name="enviar" value="Atualizar equipamento" class="butto0">
		
	</form>
	<a href="ver.php">Voltar</a>

</div>




</body>
</html>

