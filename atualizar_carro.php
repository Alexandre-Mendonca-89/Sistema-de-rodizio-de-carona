<?php
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:index.php");
		die();
	}
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_POST["id"];
	$marca=$_POST["marca"];
	$modelo=$_POST["modelo"];
	$ano=$_POST["ano"];
	$cor=$_POST["cor"];
	$qtd_lugares=$_POST["qtd_lugares"];
	$consumo=$_POST["consumo"];
	
	mysqli_query($conexao,"UPDATE `carro` SET `marca` = '$marca', `modelo` = '$modelo', `ano` = '$ano', `cor` = '$cor', `qtd_lugares` = '$qtd_lugares', `consumo` = '$consumo' WHERE `carro`.`id` = $id;");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao editar os dados";
	}else{
		header("Location:listar.php");
	}
?>
?>