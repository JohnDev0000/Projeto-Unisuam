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
    <form action="change_password.php" method="post">
        <label for="Email">Email</label>
        <input type="email" id="old_password" name="old_password" required><br><br>

        <label for="new_password">Nova Senha:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        

        <label for="confirm_password">Confirme a Nova Senha:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <input type="submit" value="Alterar Senha">
            
    </form>


</body>
</html>