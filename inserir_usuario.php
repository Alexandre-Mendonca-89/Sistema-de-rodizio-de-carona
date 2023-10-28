<?php
/*session_start();
if(!isset($_SESSION["auth"])){
	header("Location:index.php");
	die();
}*/
?>
  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inserir Usuário</title>
</head>
<body>
	<form action="/WEB_1/Projeto_2/carona/salvar_usuario.php" method="POST">
		  <label for="nome">Nome:</label><br>
		  <input type="text" id="nome" name="nome" placeholder="nome"><br><br>

		  <label for="idade">Idade:</label><br>
		  <input type="text" id="idade" name="idade" placeholder="idade"><br><br>

		  <label for="cpf">CPF:</label><br>
		  <input type="text" id="cpf" name="cpf" placeholder="cpf"><br><br>

		  <label for="turno">Turno:</label><br>
		  <input type="text" id="turno" name="turno" placeholder="turno"><br><br>

		  <label for="descricao">Descricao destino:</label><br>
		  <input type="text" id="descricao" name="descricao" placeholder="descricao destino"><br><br>

		  <label for="login">Login:</label><br>
		  <input type="text" id="login" name="login" placeholder="login"><br><br>

		  <label for="senha">Senha:</label><br>
		  <input type="password" id="senha" name="senha" placeholder="senha"><br><br>

		  <input type="submit" value="Salvar">
		  <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
	</form>
</body>
</html>