<?php
	require_once 'conexao.php';
	require_once 'funcionarios.php';

	$id = $_GET['id'];
	$user = Funcionarios::selecionar($pdo, $id);

	if (isset($_REQUEST['enviar'])) {
		extract($_REQUEST);
		$user = new Funcionarios($_POST);
		$user->editar($pdo, $id);

		?>
			<script type="text/javascript">
				alert("O funcionário foi atualizado com sucesso!");
				location.href="ver.php";
			</script>
		<?php
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Funcionários</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
	</style>
</head>
<body>
	<h1>Atualizar Funcionários</h1>
	<form method="POST">
		Nome:<br>
		<input type="text" name="nome" value="<?php echo $user['nome'] ?>"  class="text-box7"><br><br>
		RG:<br>
		<input type="text" name="rg" value="<?php echo $user['rg'] ?>"  class="text-box7"><br><br>
		logradouro:<br>
		<input type="text" name="logradouro" value="<?php echo $user['logradouro'] ?>" class="text-box7"><br><br>
		Número:<br>
		<input type="text" name="numero" value="<?php echo $user['numero'] ?>" class="text-box7" ><br><br>
		Cidade:<br>
		<input type="text" name="cidade" value="<?php echo $user['cidade'] ?>" class="text-box7" ><br><br>
		CEP:<br>
		<input type="text" name="cep" value="<?php echo $user['cep'] ?>" class="text-box7" ><br><br>
		Função:<br>
		<input type="text" name="funcao" value="<?php echo $user['funcao'] ?>"  class="text-box7"><br><br>
		Salário:<br>
		<input type="text" name="salario" value="<?php echo $user['salario'] ?>"  class="text-box7"><br><br>
		E-mail:<br>
		<input type="text" name="email" value="<?php echo $user['email'] ?>"  class="text-box7"><br><br>
		<div class="voltar">
		<input type="submit" name="enviar" value="Atualizar Funcionário" class="butto0">
		
	</form>

<a href="ver.php">Voltar</a>
<div class="voltar">



</body>
</html>
