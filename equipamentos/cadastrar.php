<?php
	require_once 'conexao.php';
	require_once 'equipamentos.php';

	if (isset($_REQUEST['enviar'])){
		extract($_REQUEST);
		$user = new Equipamentos($_GET);
		$user->cadastrar($pdo);

		?>
			<script type="text/javascript">
				alert("O equipamento foi cadastrado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Equipamento</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
</head>
<body>
	<h1>Cadastrar Equipamento</h1>
	<form method="get">
		Tipo:<br>
		<input type="text" name="tipo" required class="text-box7"><br><br>
		Marca:<br>
		<input type="text" name="marca"  required class="text-box7"><br><br>
		Modelo:<br>
		<input type="text" name="modelo" required class="text-box7"><br><br>
		Informações Tecnícas:<br>
		<input type="text" name="informacoes" required class="text-box7"><br><br>
		Estado Atual:<br>
		<input type="text" name="estado" required class="text-box7"><br><br>
		<div class="voltar">
		<input type="submit" name="enviar" value="Cadastrar novo equipamento" class="butto2">
	</form>
		<a href="ver.php">Voltar</a>
	</div>

</body>
</html>