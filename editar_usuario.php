<?php
session_start();
if(!isset($_SESSION["auth"])){
	header("Location:index.php");
	die();
}
include_once 'conexao.php';
$conexao=conecta();
$id=$_GET["id"];
$dados=mysqli_query($conexao,"SELECT * FROM `usuario` where id=$id");
$dados=mysqli_fetch_assoc($dados);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Usuário</title>
</head>
<body>
	<form action="atualizar_usuario.php" method="POST">
		  <input type="hidden" id="id" name="id" value="<?php echo $dados['id']?>"><br>

		  <label for="nome">Nome:</label><br>
		  <input type="text" id="nome" name="nome" value="<?php echo $dados['nome']?>" placeholder="Nome"><br>

		  <label for="idade">Idade:</label><br>
		  <input type="text" id="idade" name="idade" value="<?php echo $dados['idade']?>" placeholder="idade"><br>

		  <label for="cpf">CPF:</label><br>
		  <input type="text" id="cpf" name="cpf" value="<?php echo $dados['cpf']?>" placeholder="cpf"><br>

		  <label for="turno">Turno:</label><br>
		  <input type="text" id="turno" name="turno" value="<?php echo $dados['turno']?>" placeholder="turno"><br><br>

		  <label for="descricao">Descrição destino:</label><br>
		  <input type="text" id="descricao" name="descricao" value="<?php echo $dados['descricao']?>" placeholder="descricao"><br><br>

		  <label for="login">Login:</label><br>
		  <input type="text" id="login" name="login" value="<?php echo $dados['login']?>" placeholder="login"><br><br>

		  <label for="senha">senha:</label><br>
		  <input type="text" id="senha" name="senha" value="<?php echo $dados['senha']?>" placeholder="senha"><br><br>

		  <input type="submit" value="Salvar">
		  <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
	</form>
</body>
</html>