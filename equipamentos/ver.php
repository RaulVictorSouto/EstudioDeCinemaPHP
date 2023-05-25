<?php
	require_once 'conexao.php';
	require_once 'equipamentos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ver Equipamentos Cadastrados</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
	
</head>
<body>
	<h1>Equipamentos Cadastrados</h1>
	<table class="tabela">
		<tr class="tabela">
			<td class="tabela dado">Id</td>
			<td class="tabela dado">Tipo</td>
			<td class="tabela dado">Marca</td>
			<td class="tabela dado">Modelo</td>
			<td class="tabela dado">Informações Tecnícas</td>
			<td class="tabela dado">Estado Atual</td>
			<td colspan="2"></td>
			<?php
				$user=Equipamentos::mostrar($pdo);
				foreach ($user as $rows) {
					echo "<tr>";
					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['tipo']."</td>";	
					echo "<td>".$rows['marca']."</td>";	
					echo "<td>".$rows['modelo']."</td>";	
					echo "<td>".$rows['informacoes']."</td>";
					echo "<td>".$rows['estado']."</td>";
					echo "<td><a href='editar.php?id=".$rows['id']."''>Editar</a></td>";		
					echo "<td><a href='deletar.php?id=".$rows['id']."' onClick=\"return confirm('Tem certeza que deseja excluir esse filme?')\">Excluir</a></td>";
					echo "</tr>";
				}

			?>

		</tr>
	</table>
	<br>
	<div class="links">
	<a href="cadastrar.php">Cadastrar novo equipamento</a>
	<a href="../principal.php">Voltar</a>
</div>


</body>
</html>