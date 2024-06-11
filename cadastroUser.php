<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Gaming News</title>
        <link rel="stylesheet" href="CSS/style.css">

    </head>
    <body>

        <?php include 'header.php'; ?>

        <div><p><br></p></div>
        <div><p><br></p></div>
        <div><p><br></p></div>
        <div><p><br></p></div>

        <div>
            <h2 style="padding-bottom: 20px">Cadastro do Usuário</h2>

            <?php
                session_start();
                if (isset($_SESSION['erro'])) {
                    echo "<p style='color: red'>{$_SESSION['erro']}</p>";
                    unset($_SESSION['erro']);
                }
                if (isset($_SESSION['sucesso'])) {
                    echo "<p style='color: green'>{$_SESSION['sucesso']}</p>";
                    unset($_SESSION['sucesso']);
                }
            ?>

            <form action="Scripts/processa.php" method="post" id="cadastroForm">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required minlength="15" maxlength="80"
                       pattern="[A-Za-z\s]+"><br>
                <span id="nomeError" class="error-message" style="color: red;"></span><p></p>

                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required><p></p>

                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
                <p></p>

                <label for="nome_materno">Nome Materno:</label>
                <input type="text" id="nome_materno" name="nome_materno" required>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
<!--                <span id="cpfError" class="error-message" style="color: red;"></span><br>-->

                <label for="telefone_celular">Telefone Celular:</label>
                <input type="text" id="telefone_celular" name="telefone_celular"><br>
                <span id="telefoneCelularError" class="error-message" style="color: red;"></span>
                <p></p>

                <label for="telefone_fixo">Telefone Fixo:</label>
                <input type="text" id="telefone_fixo" name="telefone_fixo"><br>
                <span id="telefoneFixoError" class="error-message" style="color: red;"></span>
                <p></p>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>

                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento">

                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required pattern="[A-Za-z]{6}">
                <span id="loginError" class="error-message" style="color: red"></span><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required pattern="[A-Za-z0-9]{8}">
                <span id="senhaError" class="error-message" style="color: red;"></span><br>

                <label for="confirmacao_senha">Confirmação da Senha:</label>
                <input type="password" id="confirmacao_senha" name="confirmacao_senha" required><br>
                <span id="confirmacaoSenhaError" class="error-message" style="color: red;"></span><br>

                <p></p>

                <input type="submit" name="Submit" value="Cadastrar">
                <input type="reset" value="Limpar Tela">
            </form>
        </div>

        <script src="JavaScript/mascara.js"></script>

    </body>
</html>

