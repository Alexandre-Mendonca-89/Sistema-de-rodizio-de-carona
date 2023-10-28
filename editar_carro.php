<?php
session_start();
if(!isset($_SESSION["auth"])){
	header("Location:index.php");
	die();
}
include_once 'conexao.php';
$conexao=conecta();
$id=$_GET["id"];
$dados=mysqli_query($conexao,"SELECT * FROM `carro` where id=$id");
$dados=mysqli_fetch_assoc($dados);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Carro</title>
</head>
<body>
	<form action="atualizar_carro.php" method="POST">
		  <input type="hidden" id="id" name="id" value="<?php echo $dados['id']?>"><br>

		  <label for="marca">Marca:</label><br>
		  <input type="text" id="marca" name="marca" value="<?php echo $dados['marca']?>" placeholder="Marca do carro"><br>

		  <label for="modelo">Modelo:</label><br>
		  <input type="text" id="modelo" name="modelo" value="<?php echo $dados['modelo']?>" placeholder="modelo"><br>

		  <label for="ano">Ano:</label><br>
		  <input type="text" id="ano" name="ano" value="<?php echo $dados['ano']?>" placeholder="Ano do carro"><br>

		  <label for="cor">Cor:</label><br>
		  <input type="text" id="cor" name="cor" value="<?php echo $dados['cor']?>" placeholder="Cor do carro"><br><br>

		  <label for="qtd_lugares">Quantidade de lugares:</label><br>
		  <input type="text" id="qtd_lugares" name="qtd_lugares" value="<?php echo $dados['qtd_lugares']?>" placeholder="Quantidade de lugares"><br><br>

		  <label for="consumo">Consumo:</label><br>
		  <input type="text" id="consumo" name="consumo" value="<?php echo $dados['consumo']?>" placeholder="Consumo - km/l"><br><br>

		  <input type="submit" value="Salvar">
		  <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
	</form>
</body>
</html>