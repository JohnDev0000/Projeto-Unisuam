<?php
    include '../Classes/database.php';
    session_start();

    $response = ['success' => false, 'message' => ''];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_SESSION['usuario_id'])) {
            $response['message'] = 'Você precisa estar logado para alterar a senha.';
        } else {
            $current_password = $_POST['senha_atual'];
            $new_password = $_POST['nova_senha'];
            $confirm_password = $_POST['confirmar_senha'];
            $usuario_id = $_SESSION['usuario_id'];

            if ($new_password !== $confirm_password) {
                $response['message'] = 'A nova senha e a confirmação da senha não coincidem.';
            } else {
                $database = new Database('usuarios');

                $result = $database->select("id = ?", null, null, 'senha', [$usuario_id]);
                $user = $result->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($current_password, $user['senha'])) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $update_success = $database->update("id = $usuario_id", ['senha' => $hashed_password]);

                    if ($update_success) {
                        $response['success'] = true;
                        $response['message'] = 'Senha alterada com sucesso.';
                    } else {
                        $response['message'] = 'Erro ao alterar a senha.';
                    }
                } else {
                    $response['message'] = 'Senha atual incorreta.';
                }
            }
        }
    }

    if ($response['success']) {
        echo "<script>alert('{$response['message']}'); window.location.href = '../mainpage.php';</script>";
    } else {
        echo "<script>alert('{$response['message']}'); window.location.href = '../redefinirSenha_process.php';</script>";
    }
?>
