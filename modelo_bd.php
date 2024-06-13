<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Document</title>
        <style>
            .cont {
                width: 500px;
                height: 500px;
            }

            .voltar {
                display: flex;
                justify-content: center;
                align-items: center;
            }

        </style>
    </head>
    <body>

        <?php include 'header.php'; ?>


        <div style="display: flex; flex-direction: row; margin-top: 150px">
            <div style="padding: 10px">
                <img class="cont" src="Imagens/modelo_conceitual.jpg" alt="modelo_conceitual">
            </div>
            <div style="padding: 10px">
                <img class="cont" src="Imagens/modelo_logico.jpg" alt="modelo_logico">
            </div>
        </div>

        <a class="voltar" href="userpage.php" style=" padding: 20px; margin-top: 50px"><h3 style="color: orange;">Voltar</h3></a>
    </body>
</html>