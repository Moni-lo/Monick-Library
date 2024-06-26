<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monick Library | Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="main-login">
        <h1>Login</h1>
        <form action="./src/login-control.php" method="post">
            <input class="field" type="email" name="email" placeholder="Email">
            <input class="field" type="password" name="senha" placeholder="Senha">
            <input class="field" type="submit" name="submit" value="Logar">
            <br><br>
        </form>

        <a href="index.php"><button>Voltar</button></a>

    </div>   

</body>
</html>