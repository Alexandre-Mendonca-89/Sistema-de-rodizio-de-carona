<?php
	session_start();
	if(!isset($_SESSION["auth"])){
		header("Location:/WEB_1/Projeto_2/carona/index.php");
		die();
	}
	include_once 'conexao.php';
	$conexao=conecta();
	$nome=$_POST["nome"];
	preg_match('~[0-9]+~',$nome,$n);
	var_dump(is_numeric($nome));
	if($n){
		header("Location:/WEB_1/Projeto_2/carona/inserir_usuario.php");
		die();
	}
	$idade=$_POST["idade"];
	$cpf=$_POST["cpf"];
	$turno=$_POST["turno"];
	$descricao=$_POST["descricao"];
	$login=$_POST["login"];
	$senha=md5($_POST["senha"]);
	
	mysqli_query($conexao,"INSERT INTO `usuario` (`id`, `nome`, `idade`, `cpf`, `turno`, `descricao`, `login`, `senha`) VALUES (NULL, '".$nome."', '".$idade."', '".$cpf."', '".$turno."' , '".$descricao."' , '".$login."', '".$senha."');");
	if(mysqli_errno($conexao)!=0){
		echo "Erro ao salvar os dados do usuario";
	}else{
		header("Location:/WEB_1/Projeto_2/carona/listar_usuario.php");
	}
?>