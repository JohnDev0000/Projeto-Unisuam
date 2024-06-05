<?php
    require __DIR__.'/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
    <script>
        function funcao1() {
        event.preventDefault();

        alert("Usuário ou Senha incorretos!");
        window.location.href = window.location.href;
        }

    </script>
    

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
                    <li class="hover-link nav-item"><a href = "index.php">Início</a></li>
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
    <form action="login.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>

        <p><a href="AlteraSenha.php">Esqueceu a senha?</a></p>
        <input type="submit"  onclick="funcao1()"  value="Login"> 

    </form>




    
</body>
</html>


