<?php
//    include 'Scripts/processa.php';
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Gaming News</title>
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
<!--                    <li class="hover-link nav-item"><a href= "cadastroUser.php">Cadastro</a></li>-->
                    <li class="hover-link nav-item"><a href = "mainpage.php">Início</a></li>
                    <li class="hover-link nav-item"><a href= 2fa.php>2FA</a></li>
                </ul>
            </div>
        </div>

    </nav>

    <div><p><br></p></div>
    <div><p><br></p></div>
    <div><p><br></p></div>
    <div><p><br></p></div>

    <div>
        <form action="Scripts/processa.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select><br><br>

            <label for="nome_materno">Nome Materno:</label>
            <input type="text" id="nome_materno" name="nome_materno" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="telefone_celular">Telefone Celular:</label>
            <input type="text" id="telefone_celular" name="telefone_celular" required>

            <label for="telefone_fixo">Telefone Fixo:</label>
            <input type="text" id="telefone_fixo" name="telefone_fixo">

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">

            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br><br>

            <input type="submit" name="Submit" value="Cadastrar">
        </form>
    </div>



</body>
</html>

