<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monick Library | Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="main-cadastro">
        <h1>Cadastro</h1>
        <form action="./src/cadastro-control.php" method="post">
            <input class="field" type="text" name="nome" placeholder="Nome de usuário">
            <input class="field" type="email" name="email" placeholder="Email">
            <input class="field" type="password" name="senha" placeholder="Senha">
            <input class="field" type="password" name="confirmacao-de-senha" placeholder="Confirme sua senha">
            
            <input class="field" type="submit" value="Cadastre-se!">
        </form>
    <br>
    
    <a href="login.php">Já tem uma conta?</a>

    </div>   

</body>
</html>