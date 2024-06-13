<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['otp'])) {
        $otp = $_POST['otp'];

        if (isset($_SESSION['otp']) && $otp === $_SESSION['otp']) {
            unset($_SESSION['otp']);
            header("Location: mainpage.php");
            exit();
        } else {
            echo "<script>
                alert('Código de verificação incorreto.');
                window.location.href = '2fa.php';
              </script>";
        }
    }
?>