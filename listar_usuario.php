<?php 
	session_start();
	include_once 'conexao.php';
	$conexao=conecta();
	if(!isset($_SESSION["auth"])){
		header("Location:/WEB_1/Projeto_2/carona/index.php");
		die();
	}
	$id=$_SESSION['id'];
	$dados=mysqli_query($conexao,"SELECT * FROM `usuario` where id=$id ");

	//var_dump($_SESSION);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listar Usuario</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		th{
			color: white;
			background-color: #4F4F4F;
			border: 1px solid black;
			padding: 10px;
		}
		td{
			background-color: 	#808080;
			border: 1px solid black;
			padding: 10px;
		}
		a{
			text-decoration: none;
			padding: 3px;
			color: black;
			text-align: center;
		}
		.inserir_usuario{
			border-color: #3498db;
			color: #fff;
			box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
			-webkit-transition: all 150ms ease-in-out;
			transition: all 150ms ease-in-out;
		}.editar_usuario{
			border-color: #3498db;
			color: #fff;
			box-shadow: 0 0 40px 40px #32CD32 inset, 0 0 0 0 #32CD32;
			-webkit-transition: all 150ms ease-in-out;
			transition: all 150ms ease-in-out;
		}.excluir_usuario {
			border-color: #3498db;
			color: #fff;
			box-shadow: 0 0 40px 40px #FF0000 inset, 0 0 0 0 #FF0000;
			-webkit-transition: all 150ms ease-in-out;
			transition: all 150ms ease-in-out;
		}
		.inserir_usuario:hover {
			box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
		}
		.editar_usuario:hover {
			box-shadow: 0 0 10px 0 #32CD32 inset, 0 0 10px 4px #32CD32;
		}
		.excluir_usuario:hover {
			box-shadow: 0 0 10px 0 #FF0000 inset, 0 0 10px 4px #FF0000;
		}

		.w3-btn {width:150px;}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>nome</th>
			<th>idade</th>
			<th>cpf</th>
			<th>turno</th>
			<th>descricao</th>
			<th>INSERIR</th>
			<th>EDITAR</th>
			<th>EXLUIR</th>
		</tr>
		<?php
		while($pessoa=mysqli_fetch_assoc($dados)){
			?>
			<tr>
				<td><?php echo $pessoa["id"]?></td>
				<td><?php echo $pessoa["nome"]?></td>
				<td><?php echo $pessoa["idade"]?></td>
				<td><?php echo $pessoa["cpf"]?></td>
				<td><?php echo $pessoa["turno"]?></td>
				<td><?php echo $pessoa["descricao"]?></td>
				<td> <a class="inserir_usuario" href="/WEB_1/Projeto_2/carona/inserir_usuario.php">Inserir usuario</a> </td>
				<td> <a class="editar_usuario" href="/WEB_1/Projeto_2/carona/editar_usuario.php?id=<?php echo $pessoa['id']?>">Editar Usuario</a> </td>
				<td> <a class="excluir_usuario" href="/WEB_1/Projeto_2/carona/excluir_usuario.php?id=<?php echo $pessoa['id']?>">Excluir Usuario</a> </td>
				</tr>
				<?php
			}
			?>
		</table>
		<p>Clique no botão ao lado para voltar no menu inicial:
        <a class="w3-button w3-green w3-round-xlarge" href="menu_inicial.php">Menu Inicial</a></p>
		<p>Clique no botão ao lado para listar de carona:
        <a class="w3-button w3-green w3-round-xlarge" href="listar_carro.php">Lista de carona</a></p>
		<p>Clique no botão ao lado para deslogar do sistema:
        <a class="w3-button w3-green w3-round-xlarge" href="logout.php">Sair</a></p>
        
		
	</body>
	</html>