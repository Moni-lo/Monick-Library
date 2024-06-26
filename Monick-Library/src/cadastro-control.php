<?php 

require_once "Conection.php";

$nome = $_POST['nome'];
$email= $_POST['email'];
$senha = $_POST['senha'];
$confimacao_de_senha = $_POST['confirmacao-de-senha'];

if ($_POST['confirmacao-de-senha'] != $_POST['senha']) {
    die(header('Location: ../index.php'));

} else {

    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";

    $pdo = Conection::conect('settings.ini');

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha
    ]);

    if ($pdo) {
        header('Location: ../login.php');
    }
}

