<?php
    include '../Classes/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $database = new Database('usuarios');

        $result = $database->select("login = '$login'");

        if ($result) {
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $user['senha'])) {
                session_start();
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario_nome'] = $user['nome'];

                header("Location: ../index.php");
                exit();
            } else {
                $error_message = 'Senha incorreta.';
            }
        } else {
            $error_message = 'Usuário não encontrado.';
        }
    }

    if (isset($error_message)) {
        echo "<script>alert('$error_message'); window.location.href = '../index.php';</script>";
    }
?>
