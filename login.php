<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    
    <nav>
        <div class="main-nav container flex">
            <a href="#" class="Uni-Logo">
                <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item"><a href = login.php>Login</a></li>
                    <li class="hover-link nav-item"><a href= cadastroUser.php>Cadastro</a></li>
                    <li class="hover-link nav-item"><a href = "mainpage.php">Início</a></li>
                    <li class="hover-link nav-item"><a href= 2fa.php>2FA</a></li>
                    <li class="hover-link nav-item"><a href= consultaUser.php>Consulta</a></li>
                </ul>
            </div>
            <div class="search-bar flex">
                <input type="text" class="news-input" placeholder="Pesquise">
                <button class="search-button">Pesquisar</button>

            </div>
        </div>
    </nav>

    
    <h2>Login do Usuário</h2>
    <form action="Scripts/login_process.php" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <p><a href="" >Trocar a senha</a></p>

        <p><a href="#" onclick="forgotPassword()">Esqueceu a senha?</a></p>

        <input type="submit" value="Login">

    </form>

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


