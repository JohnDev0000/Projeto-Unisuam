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
        <title>Consultar do Usuários</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body style="display: flex; justify-content: center; align-items: center">

        <?php include 'header.php'; ?>

        <div>
            <div>
                <form action="Scripts/getUser.php" method="get">
                    <label>Lista Todos os usuarios:</label>
                    <input type="submit" value="Pesquisar">
                </form>
            </div>

            <br>

            <div>
                <form action="Scripts/getUserByName.php" method="get">
                    <label for="nome">Pesquisar por Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite parte do nome...">
                    <input type="submit" value="Pesquisar">
                </form>
            </div>
        </div>
    </body>
</html>