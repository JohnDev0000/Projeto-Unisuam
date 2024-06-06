<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar do Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; justify-content: center; align-items: center">
    
    <nav>
        <div class="main-nav container flex">
            <a href="#" class="Uni-Logo">
                <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
            </a>
            <div class="nav-links">
                <ul class="flex">
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

    <div style="display: flex; max-width: 70%; max-height: 50%; justify-content: center">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Matricula</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Leonardo Inacio</td>
                    <td>22203028</td>
                </tr>

                <tr>
                    <td>João Pedro</td>
                    <td>22201613</td>
                </tr>

                <tr>
                    <td>Patrik Seles</td>
                    <td>22203026</td>
                </tr>

                <tr>
                    <td>Jhonatha Ornellas</td>
                    <td>22204799</td>
                </tr>

                <tr>
                    <td>Felipe José</td>
                    <td>23205414</td>
                </tr>

                <tr>
                    <td>Thiago Khalil</td>
                    <td>22203023</td>
                </tr>

            </tbody>
        </table>


        <BR><BR><BR><BR><BR><BR><BR><BR>

        <h3 style="color: white; padding: 0 20px 0 20px">Lista Todos os usuarios:</h3><br>
        <form action="Scripts/getUser.php" method="get">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf"><br><br>

            <input type="submit" value="Pesquisar">
        </form>

        <h3 style="color: white; padding: 0 20px 0 20px">Lista Usuario por ID:</h3><br>
        <form action="Scripts/getUserById.php" method="get">
            <label for="nome">Nome do Usuário:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <input type="submit" value="Pesquisar">
        </form>

    </div>
</body>
</html>