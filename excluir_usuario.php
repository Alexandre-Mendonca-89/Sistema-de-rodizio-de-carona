<?php 
	include_once 'conexao.php';
	$conexao=conecta();
	$id=$_GET['id'];
	mysqli_query($conexao," DELETE FROM `usuario` WHERE `usuario`.`id` =".$id."");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao excluir os dados do usuario";
	}else{
		header("Location:listar.php");
	}
?>