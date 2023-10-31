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
        .inserir_usuario:link, .inserir_usuario:visited {
          background-color: #008B8B;
          color: white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .inserir_usuario:hover, .inserir_usuario:active {
          background-color: Gray;
        }

        .listar_usuario:link, .listar_usuario:visited {
          background-color: #20B2AA;
          color: white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .listar_usuario:hover, .listar_usuario:active {
          background-color: Gray;
        }

        .inserir_carro:link, .inserirr_carro:visited {
          background-color: #556B2F;
          color: white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .inserir_carro:hover, .inserir_carro:active {
          background-color: Gray;
        }

        .listar_carro:link, .listar_carro:visited {
          background-color: #2E8B57;
          color: white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .listar_carro:hover, .listar_carro:active {
          background-color: Gray;
        }

        .logout:link, .logout:visited {
          background-color: #DC143C;
          color: white;
          padding: 15px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        .logout:hover, .logout:active {
          background-color: Gray;
        }
    </style>
</head>
<body>
        <p>Escolha uma das opções abaixo para navegar no sistema:</p>
        <a class="inserir_usuario" href="inserir_usuario.php">Cadastrar Usuário</a>
        <a class="listar_usuario" href="listar_usuario.php">Listar Usuário cadastrados</a>
        <a class="inserir_carro" href="inserir_carro.php">Inserir carona</a>
        <a class="listar_carro" href="listar_carro.php">Listar caronas disponíveis</a>
        <a class="logout" href="logout.php">Sair do sistema</a>
        
        
    </body>
    </html>