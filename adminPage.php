<?php
    session_start();
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>

        <div style="display: flex; flex-direction: row; justify-content: center; align-items: center">
            <?php include 'Scripts/integrantes.php'; ?>

            <div style="padding-left: 30px;">
                <a style="color: orange" href="consultaUser.php">Consultar Usuários</a>
            </div>
        </div>
    </body>
</html>