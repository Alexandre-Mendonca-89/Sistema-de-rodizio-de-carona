<?php
function conecta()
{
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$database="carona";
	$conexao=mysqli_connect($servidor,$usuario,$senha,$database);
	if(!$conexao){
		echo "Erro ao conectar ".mysqli_connect_erro();
	}
	return $conexao;
}
?>