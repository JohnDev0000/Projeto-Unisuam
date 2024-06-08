<?php
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }

    if (!isset($_SESSION['is_master']) || !$_SESSION['is_master']) {
        if (!isset($_SESSION['otp'])) {
            try {
                $otp = bin2hex(random_bytes(4));
            } catch (\Random\RandomException $e) {
            }
            $_SESSION['otp'] = $otp;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $otp = $_POST['otp'];

        if ($otp == $_SESSION['otp']) {
            unset($_SESSION['otp']);
            header("Location: mainpage.php");
            exit();
        } else {
            echo "<script>
                alert('Código de verificação incorreto.');
              </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Segundo Fator de Autenticação</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>

        <?php include 'header.php'; ?>

        <div>
            <h2>Segundo Fator de Autenticação</h2>

            <br>

            <?php if (isset($_SESSION['is_master']) && $_SESSION['is_master']): ?>
                <p>Você é um usuário master, não é necessário se autenticar.</p>
                <a href="mainpage.php">Ir para a página principal</a>
            <?php else: ?>
                <p>Seu código de verificação será exibido em breve...</p>
                <form action="2fa.php" method="post" id="otp-form" style="display:none;">
                    <label for="otp">Código de Verificação:</label>
                    <input type="text" id="otp" name="otp" required><br><br>
                    <p>Insira o código acima para verificar.</p>
                    <input type="submit" value="Verificar">
                </form>
                <script>
                    setTimeout(function () {
                        alert('Seu código de verificação é: <?php echo $_SESSION['otp']; ?>');
                        document.getElementById('otp-form').style.display = 'block';
                    }, 3000);
                </script>
            <?php endif; ?>
        </div>

    </body>
</html>
