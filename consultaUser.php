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

        <div class="form-container">
            <form action="Scripts/getUser.php" method="get">
                <label>Lista Todos os usuarios:</label>
                <input type="submit" value="Pesquisar">
            </form>
        </div>


        <a href="Scripts/getUser.php"></a>



<!--        <h3 style="color: white; padding: 0 20px 0 20px">Lista Usuario por ID:</h3><br>-->
<!--        <form action="Scripts/getUserById.php" method="get">-->
<!--            <label for="nome">Nome do Usuário:</label>-->
<!--            <input type="text" id="nome" name="nome" required><br><br>-->
<!---->
<!--            <input type="submit" value="Pesquisar">-->
<!--        </form>-->
    </body>
</html>