<?php

session_start();

/*o código abaixo confere se o form do login foi submitado e se os campos não estão vazios para efetuar a consulta sql,
caso estejam vazios, o manterá na página de login para preenchê-los.*/

if (isset($_POST['submit']) and !empty($_POST['email']) and !empty($_POST['senha'])) {
    require_once "Conection.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";

    $pdo = Conection::conect("settings.ini");

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":email" => $email,
        ":senha" => $senha
    ]);

    $result = $stmt->fetchAll();

        /*se o usuario conter um registro no banco de dados, count($result) > 0, poderá logar no sistema e o 
        php criará sessões com os valores de email e senha para armazenar os dados inseridos. Caso contrário, o mantém no login*/

    if (count($result) < 1) {           
        unset($_SESSION['email']);   
        unset($_SESSION['senha']);
        header('Location: ../login.php');

    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../system.php');
    }

  
} else {
    header('Location: ../login.php');
}
