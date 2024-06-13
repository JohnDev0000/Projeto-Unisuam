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
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/userpage.css">
    </head>
    <body>
        <nav>
            <?php include 'header.php'; ?>
            <ul>
                <li><a href="mainpage.php">Página Principal</a></li>
                <li><a href="consultaUser.php">Consultar Usuários</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>

        <div style="display: flex; flex-direction: row; margin-top: 70px">
            <div class="user_container">
                <h1>Detalhes da Conta do Usuário</h1>
                <?php include 'Scripts/getUserData.php'; ?>
            </div>

            <div style="padding: 20px; margin-top: 50px">
                <a href="trocarSenha.php"><h3 style="color: orange;">Alterar Senha</h3></a>
                <a href="modelo_bd.php"><h3 style="color: orange;">Modelo BD</h3></a>
                <a href="Scripts/gerar_pdf.php" target="_blank"><h3 style="color: orange;">Baixar Lista de Usuários em PDF</h3></a>
            </div>
        </div>
    </body>
</html>