<?php
	require_once 'conexao.php';
	require_once 'funcionarios.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ver funcionarios cadastrados</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
</head>
<body>
	<h1>Funcionários cadastrados</h1>
	<table class="tabela">
		<tr class="tabela">
			<td class="tabela dado">Id</td>
			<td class="tabela dado">Nomes</td>
			<td class="tabela dado">RG</td>
			<td class="tabela dado">Logradouro</td>
			<td class="tabela dado">Numero</td>
			<td class="tabela dado">Cidade</td>
			<td class="tabela dado">CEP</td>
			<td class="tabela dado">Função</td>
			<td class="tabela dado">Salário</td>
			<td class="tabela dado">E-mail</td>
			<td colspan="2"></td>
			<?php
				$user=Funcionarios::mostrar($pdo);
				foreach ($user as $rows ) {
					echo "<tr>";
					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['nome']."</td>";	
					echo "<td>".$rows['rg']."</td>";	
					echo "<td>".$rows['logradouro']."</td>";	
					echo "<td>".$rows['numero']."</td>";
					echo "<td>".$rows['cidade']."</td>";
					echo "<td>".$rows['cep']."</td>";
					echo "<td>".$rows['funcao']."</td>";
					echo "<td>".$rows['salario']."</td>";
					echo "<td>".$rows['email']."</td>";
					echo "<td><a href='editar.php?id=".$rows['id']."''>Editar</a></td>";		
					echo "<td><a href='deletar.php?id=".$rows['id']."' onClick=\"return confirm('Tem certeza que deseja excluir esse filme?')\">Excluir</a></td>";
					echo "</tr>";
				}

				?>

		</tr>
	</table>

	<a href="cadastrar.php">Inserir novo funcionário</a>
	<a href="../principal.php">Voltar</a>

</body>
</html>