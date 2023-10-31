<?php
	session_start();
	include_once 'conexao.php';
	$conexao=conecta();
	$login=$_POST["login"];
	$senha=md5($_POST["senha"]);

	$stmt=$conexao->prepare("SELECT * FROM `usuario` WHERE login=? and senha=? ; ");
	$stmt->bind_param("ss", $login, $senha);
	$stmt->execute();
	$dados=$stmt->get_result();

	//$dados=mysqli_query($conexao,"SELECT * FROM `funcionario` WHERE login='$login' and senha='$senha' ");
	//var_dump($dados);
	//echo "SELECT * FROM `funcionario` WHERE login='$login' and senha='$senha' ";
	if(mysqli_num_rows($dados)){
		$dados=mysqli_fetch_assoc($dados);
		$_SESSION["auth"]=true;
		$_SESSION["id"]=$dados["id"];
		$_SESSION["nome"]=$dados["nome"];
		header("Location:/WEB_1/Projeto_2/carona/listar_usuario.php");
		die();

	}else{
		header("Location:index.php");
		die();
	}

?>