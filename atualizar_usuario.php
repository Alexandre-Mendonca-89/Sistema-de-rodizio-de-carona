<?php
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:/WEB_1/Projeto_2/carona/index.php");
		die();
	}
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_POST["id"];
	$nome=$_POST["nome"];
	$idade=$_POST["idade"];
	$cpf=$_POST["cpf"];
	$turno=$_POST["turno"];
	$descricao=$_POST["descricao"];
	
	mysqli_query($conexao,"UPDATE `usuario` SET `nome` = '$nome', `idade` = '$idade', `cpf` = '$cpf', `turno` = '$turno', `descricao` = '$descricao' WHERE `usuario`.`id` = $id;");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao editar os dados";
	}else{
		header("Location:listar.php");
	}
?>
?>