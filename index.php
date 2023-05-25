<!DOCTYPE html>
<html>
<head lang="pt-br">
<title>Sistema da Wanderley Filmes</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap');
</style>
</head>
<body>
<div class="box">
<form method="POST" name="dados">
<h1>Bem vindos ao Sistema da Wanderley Filmes</h1><br>
Login:<br>
<input type="text" name="login" class="text-box"><br><br>
Senha:<br>
<input type="password" name="senha" class="text-box"><br><br>
<input type="button" value="Entrar" onclick="logar()" class="text-box2" >
</form>
</div>
</body>
</html>

<script type="text/javascript">
function logar() {
var login = document.dados.login.value;
var senha = document.dados.senha.value;

if (login=="admin" && senha=="admin"){
window.location="principal.php";
} else {
alert("Login ou senha incorretos!");
}
}
</script>