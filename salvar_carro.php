<?php
	
	include_once 'conexao.php';
	$conexao=conecta();
	$marca=$_POST["marca"];
	preg_match('~[0-9]+~',$marca,$n);
	var_dump(is_numeric($marca));
	if($n){
		header("Location:/WEB_1/Projeto_2/carona/inserir_carro.php");
		die();
	}
	$modelo=$_POST["modelo"];
	$ano=$_POST["ano"];
	$cor=$_POST["cor"];
	$qtd_lugares=$_POST["qtd_lugares"];
	$consumo=$_POST["consumo"];
	
	mysqli_query($conexao,"INSERT INTO `carro` (`id`, `marca`, `modelo`, `ano`, `cor`, `qtd_lugares`, `consumo`) VALUES (NULL, '".$marca."', '".$modelo."', '".$ano."', '".$cor."' , '".$qtd_lugares."' , '".$consumo."');");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao salvar os dados do carro";
	}else{
		header("Location:listar_carro.php");
	}
?>