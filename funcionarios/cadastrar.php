<?php
	require_once 'conexao.php';
	require_once 'funcionarios.php';

	if (isset($_REQUEST['enviar'])){
		extract($_REQUEST);
		$user = new Funcionarios($_GET);
		$user->cadastrar($pdo);

		?>
			<script type="text/javascript">
				alert("O funcionário foi cadastrado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastrar Funcionários</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
</head>
<body>
	<h1>Cadastrar Funcionários</h1>
	<form method="get">
		Nome:<br>
		<input type="text" name="nome" required class="text-box7"><br><br>
		RG:<br>
		<input type="text" name="rg"  required class="text-box7"><br><br>
		Logradouro:<br>
		<input type="text" name="logradouro" required class="text-box7"><br><br>
		Número:<br>
		<input type="text" name="numero" required class="text-box7"><br><br>
		Cidade:<br>
		<input type="text" name="cidade" required class="text-box7"><br><br>
		CEP:<br>
		<input type="text" name="cep" required class="text-box7"><br><br>
		Função:<br>
		<input type="text" name="funcao" required class="text-box7"><br><br>
		Salário:<br>
		<input type="text" name="salario" required class="text-box7"><br><br>
		E-mail:<br>
		<input type="text" name="email" required class="text-box7"><br><br>
		<div class="voltar">
		<input type="submit" name="enviar" value="Cadastrar novo funcionário" class="butto2">
	</form>
	<a href="ver.php">Voltar</a>
</div>
</body>
</html>