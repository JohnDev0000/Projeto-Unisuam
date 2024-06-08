<?php
    include '../Classes/database.php';
    session_start();

    // Usuario comum nunca conseguiria acessar essa funcionalidade, pois não tem permissão
    // de qualquer forma é bom verificar se o usuário é master
    if (!isset($_SESSION['is_master']) || !$_SESSION['is_master']) {
        echo "Você não tem permissão para excluir usuários.";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_id = $_POST['user_id'];

        $database = new Database('usuarios');
        $stmt = $database->delete("id = ?", [$user_id]);

        if ($stmt) {
            echo "Usuário excluído com sucesso.";
            header("Location: ../consultaUser.php");
            exit();
        } else {
            echo "Erro ao excluir usuário.";
        }
    }
?>
