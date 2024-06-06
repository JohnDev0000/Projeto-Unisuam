<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minha Conta</title>
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="mainpage.php">Página Principal</a></li>
                <li><a href="consultaUser.php">Consultar Usuários</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>

        <h1>Minha Conta</h1>

        <a href="trocarSenha.php"><h2>Alterar Senha</h2></a>