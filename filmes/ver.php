<?php
	require_once 'conexao.php';
	require_once 'filmes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Ver Filmes Cadastrados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
	
</head>
<body>
	<h1>Filmes Cadastrados</h1>
	<table class="tabela">
		<tr class="tabela">
			<td class="tabela dado">Id</td>
			<td class="tabela dado nome">Título</td>
			<td class="tabela dado">Generos</td>
			<td class="tabela dado">Diretores</td>
			<td class="tabela dado">Roteiristas</td>
			<td class="tabela dado">Atores</td>
			<td class="tabela dado">Trilha<br>Sonora</td>
			<td class="tabela dado">Diretor<br>de Arte</td>
			<td class="tabela dado">Engenheiro<br>de Som</td>
			<td class="tabela dado">Veículo<br>de Mídia</td>
			<td class="tabela dado">Distribuição</td>
			<td colspan="2"></td>
			<?php
				$user=Filme::mostrar($pdo);
				foreach ($user as $rows) {
					echo "<tr>";
					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['nome']."</td>";	
					echo "<td>".$rows['genero']."</td>";	
					echo "<td>".$rows['diretores']."</td>";	
					echo "<td>".$rows['roteirirstas']."</td>";
					echo "<td>".$rows['atores']."</td>";
					echo "<td>".$rows['trilhasonora']."</td>";
					echo "<td>".$rows['diretordearte']."</td>";
					echo "<td>".$rows['engenheirodesom']."</td>";
					echo "<td>".$rows['veiculodemidia']."</td>";
					echo "<td>".$rows['distrubuicao']."</td>";
					echo "<td><a href='editar.php?id=".$rows['id']."''>Editar</a></td>";		
					echo "<td><a href='deletar.php?id=".$rows['id']."' onClick=\"return confirm('Tem certeza que deseja excluir esse filme?')\">Excluir</a></td>";
					echo "</tr>";
				}

			?>

		</tr>
	</table>
	<br>
	<a href="cadastrar.php">Cadastrar novo filme</a>
	<a href="../principal.php">Voltar</a>



</body>
</html>