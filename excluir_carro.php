<?php 
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_GET['id'];
	mysqli_query($conexao," DELETE FROM `carro` WHERE `carro`.`id` =".$id."");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao excluir os dados do carro";
	}else{
		header("Location:listar.php");
	}
?>