<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="CSS/style.css">

    </head>
    <body>

        <?php include 'header.php'; ?>

        <div><p><br></p></div>
        <div><p><br></p></div>
        <div><p><br></p></div>
        <div><p><br></p></div>

        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
            <h2 style="padding-bottom: 20px">Login do Usuário</h2>

            <form action="Scripts/login_process.php" method="post">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required><br><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>

                <label for="admin_password">Senha de Administrador (Apenas Administradores):</label>
                <input type="password" id="admin_password" name="admin_password"><br><br>

                <p><a href="#" onclick="forgotPassword()">Esqueceu a senha?</a></p>

                <input type="submit" value="Login">

            </form>
        </div>

        <script>
            function forgotPassword() {
                let token = generateToken();

                alert("Seu token de redefinição de senha é: " + token);

                let userToken = prompt("Insira o token de redefinição de senha:");

                if (userToken === token) {
                    window.location.href = "RedefinicaoSenha.php";
                } else {
                    alert("Token incorreto. Tente novamente.");
                }
            }

            function generateToken() {
                return [...Array(50)].map(() => Math.random().toString(36)[2]).join('');
            }
        </script>


    </body>
</html>


