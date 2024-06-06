<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Senha</title>
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
                    <li class="hover-link nav-item"><a href = "login.php">Login</a></li>
                    <li class="hover-link nav-item"><a href= "cadastroUser.php">Cadastro</a></li>
                    <li class="hover-link nav-item"><a href = "mainpage.php">Início</a></li>
                    <li class="hover-link nav-item"><a href= 2fa.php>2FA</a></li>
                    <li class="hover-link nav-item"><a href= "consultaUser.php">Consulta</a></li>

                </ul>
            </div>
            <div class="search-bar flex">
                <input type="text" class="news-input" placeholder="Pesquise">
                <button class="search-button">Pesquisar</button>

            </div>
        </div>
    </nav>

    <h2>Alteração de Senha</h2>
    <form action="Scripts/alterar_senha.php" method="post">

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required><br><br>

        <label for="confirmar_senha">Confirmar Nova Senha:</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <input type="submit" value="Alterar Senha">

    </form>


</body>
</html>