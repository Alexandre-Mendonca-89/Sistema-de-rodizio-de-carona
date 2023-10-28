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
	<title>Inserir Carro</title>
</head>
<body>
	<form action="salvar_usuario.php" method="POST">
		  <label for="marca">Marca:</label><br>
		  <input type="text" id="marca" name="marca" placeholder="marca"><br>

		  <label for="modelo">modelo:</label><br>
		  <input type="text" id="modelo" name="modelo" placeholder="modelo"><br>

		  <label for="ano">Ano:</label><br>
		  <input type="text" id="ano" name="ano" placeholder="ano"><br>

		  <label for="cor">Cor:</label><br>
		  <input type="text" id="cor" name="cor" placeholder="cor"><br><br>

		  <label for="qtd_lugares">Quantidade de lugares:</label><br>
		  <input type="text" id="qtd_lugares" name="qtd_lugares" placeholder="Quantidade de lugares"><br><br>

		  <label for="consumo">Consumo por litro - km/l:</label><br>
		  <input type="text" id="consumo" name="consumo" placeholder="Consumo por litro"><br><br>

		  <input type="submit" value="Salvar">
		  <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
	</form>
</body>
</html>