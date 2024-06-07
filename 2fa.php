<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo fator de Autenticação</title>
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body>
    
    <nav>
        <div class="main-nav container flex">
            <a href="#" class="Uni-Logo">
                <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
            </a>
            <div class="nav-links">
                <ul class="flex">
                    <li class="hover-link nav-item"> <a href = "login.php"> Login</a> </li>
                    <li class="hover-link nav-item"><a href= "cadastroUser.php">Cadastro</a></li>
                    <li class="hover-link nav-item"><a href = "mainpage.php">Início</a></li>
                    <li class="hover-link nav-item"><a href= 2fa.html>2FA</a></li>
                    <li class="hover-link nav-item"><a href= "consultaUser.php">Consulta</a></li>
                </ul>
            </div>
            <div class="search-bar flex">
                <input type="text" class="news-input" placeholder="Pesquise">
                <button class="search-button">Pesquisar</button>

            </div>
        </div>
    </nav>

    <h2>Segundo Fator de Autenticação</h2>
    <form action="second_auth.php" method="post">
        <label for="otp">Código de Verificação:</label>
        <input type="text" id="otp" name="otp" required><br><br>
        <p>Verifique o seu Email</p>
        <input type="submit" value="Verificar">
    </form>
    



</body>
</html>