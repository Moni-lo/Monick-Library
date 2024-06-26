<?php
    session_start();

    require_once "./src/Conection.php";
    
    //Se não existir sessões com os valores de email e senha que o usuario digitou, o código abaixo irá
    //mandá-lo de volta ao login para realizar sua sessão de login

    if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

    //caso contrário o deixa entrar no painel de livros do sistema
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monick Library | Painel de livros</title>
</head>
<body>
    <h1>Meus Livros</h1>
    <a href="index.php"><button>Home</button></a>
    <br><br>

    <a href="./src/logout.php"><button>Sair</button></a>
</body>
</html>