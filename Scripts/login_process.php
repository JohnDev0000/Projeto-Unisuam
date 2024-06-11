<?php
    include '../Classes/Database.php';
    session_start();

    $admin_password = 'Pimbamaster';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $admin_password_input = $_POST['admin_password'];

        $database = new Database('usuarios');

        $result = $database->select("login = ?", null, null, '*', [$login]);
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($senha, $user['senha'])) {
                if (!empty($admin_password_input) && $admin_password_input === $admin_password) {
                    $_SESSION['is_master'] = true;
                } elseif (!empty($admin_password_input)) {
                    echo "<script>
                        alert('Senha de administrador incorreta.');
                        window.location.href = '../login.php';
                      </script>";
                    exit();
                } else {
                    $_SESSION['is_master'] = false;
                }

                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario_nome'] = $user['nome'];

                header("Location: ../mainpage.php");
                exit();
            } else {
                echo "<script>
                    alert('Senha incorreta.');
                    window.location.href = '../login.php';
                  </script>";
            }
        } else {
            echo "<script>
                alert('Login ou senha incorretos.');
                window.location.href = '../login.php';
              </script>";
        }
    }
?>
