<?php
    session_start();
    include 'Classes/Database.php';

    $database = new Database('usuarios');

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }

    if (isset($_SESSION['is_master']) && $_SESSION['is_master']) {
        echo "<p>Você é um usuário master, não é necessário se autenticar.</p>";
        echo "<a href='mainpage.php'>Ir para a página principal</a>";
        exit();
    }

    //    if (!isset($_SESSION['is_master']) || !$_SESSION['is_master']) {
    //        if (!isset($_SESSION['otp'])) {
    //            try {
    //                $otp = bin2hex(random_bytes(4));
    //            } catch (\Random\RandomException $e) {
    //            }
    //            $_SESSION['otp'] = $otp;
    //        }
    //    }

    if (!isset($_SESSION['pergunta'])) {
        $perguntas = [
            'Qual o nome da sua mãe?' => 'nome_materno',
            'Qual a data do seu nascimento?' => 'data_nascimento',
            'Qual o seu endereço?' => 'endereco'
        ];

        $chaves = array_keys($perguntas);
        shuffle($chaves);
        $perguntaSelecionada = $chaves[0];

        $_SESSION['pergunta'] = $perguntaSelecionada;
        $_SESSION['campo_correspondente'] = $perguntas[$perguntaSelecionada];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['resposta'])) {
        $campo = $_SESSION['campo_correspondente'];
        $resposta = $_POST['resposta'];

        $stmt = $database->select("id = ?", null, null, $campo, [$_SESSION['usuario_id']]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && $usuario[$campo] == $resposta) {
            $_SESSION['otp'] = bin2hex(random_bytes(3));
            header("Location: 2fa.php");
            exit();
        } else {
            $resposta_incorreta = "<p>Resposta incorreta. Tente novamente.</p>";
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
                <?php if (!isset($_SESSION['otp'])): ?>
                    <p>Por favor, responda a seguinte pergunta:</p>
                    <?php if (isset($resposta_incorreta)) echo $resposta_incorreta; ?>
                    <form action="2fa.php" method="post">
                        <label for="resposta"><?php echo $_SESSION['pergunta']; ?></label>
                        <?php if ($_SESSION['campo_correspondente'] == 'data_nascimento'): ?>
                            <input type="date" id="resposta" name="resposta" required><br><br>
                        <?php else: ?>
                            <input type="text" id="resposta" name="resposta" required><br><br>
                        <?php endif; ?>
                        <input type="submit" value="Enviar">
                    </form>
                <?php else: ?>
                    <p>Seu código de verificação será exibido em breve...</p>
                    <form action="verifica2fa.php" method="post" id="otp-form" style="display:none;">
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
            <?php endif; ?>
        </div>

    </body>
</html>
