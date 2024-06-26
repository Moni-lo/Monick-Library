<?php

session_start();

/*Destrói as sessões existentes e sai do login (conta) do usuário, retornando para a tela de login*/

unset($_SESSION['email']);
unset($_SESSION['senha']);

header('Location: ../login.php');