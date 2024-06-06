<?php
    include '../Classes/database.php';
    session_start();

    $response = ['success' => false, 'message' => ''];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $new_password = $_POST['nova_senha'];
        $confirm_password = $_POST['confirmar_senha'];

        if ($new_password !== $confirm_password) {
            $response['message'] = 'A nova senha e a confirmação da senha não coincidem.';
        } else {
            $database = new Database('usuarios');

            $result = $database->select("login = ?", null, null, '*', [$login]);
            $user = $result->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $update_success = $database->update("login = ?", ['senha' => $hashed_password], [$login]);

                if ($update_success) {
                    $response['success'] = true;
                    $response['message'] = 'Senha alterada com sucesso.';
                } else {
                    $response['message'] = 'Erro ao alterar a senha.';
                }
            } else {
                $response['message'] = 'Usuário não encontrado.';
            }
        }
    }

    if ($response['success']) {
        echo "<script>alert('{$response['message']}'); window.location.href = '../mainpage.php';</script>";
    } else {
        echo "<script>alert('{$response['message']}'); window.location.href = '../RedefinicaoSenha.php';</script>";
    }
?>
