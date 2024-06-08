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
            header("Location: ../mainpage.php");
            exit();
        } else {
            echo "<script>
                alert('Código de verificação incorreto.');
                window.location.href = '../mainpage.php';
              </script>";
        }
    }
?>
