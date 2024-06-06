<?php
    include 'Classes/database.php';

    $usuario_id = $_SESSION['usuario_id'];

    $database = new Database('usuarios');

    $usuario = $database->select('id = ?', null, null, '*', [$usuario_id])->fetch();

    if ($usuario) : ?>
                <a href="trocarSenha.php"><h3 style="color: orange">Alterar Senha</h3></a>
                <div class="user-details">
                    <label>Nome:</label>
                    <?php echo $usuario['nome']; ?>
                    <p></p>

                    <label>Data de Nascimento:</label>
                    <?php echo $usuario['data_nascimento']; ?>
                    <p></p>

                    <label>Sexo:</label>
                    <?php echo $usuario['sexo']; ?>
                    <p></p>

                    <label>Nome Materno:</label>
                    <?php echo $usuario['nome_materno']; ?>
                    <p></p>

                    <label>CPF:</label>
                    <?php echo $usuario['cpf']; ?>
                    <p></p>

                    <label>Telefone Celular:</label>
                    <?php echo $usuario['telefone_celular']; ?>
                    <p></p>

                    <label>Telefone Fixo:</label>
                    <?php echo $usuario['telefone_fixo']; ?>
                    <p></p>

                    <label>Endereço:</label>
                    <?php echo $usuario['endereco']; ?>
                    <p></p>

                    <label>Complemento:</label>
                    <?php echo $usuario['complemento']; ?>
                    <p></p>

                    <label>Login:</label>
                    <?php echo $usuario['login']; ?>
                </div>
            <?php else : ?>
                <p>Erro: usuário não encontrado.</p>
            <?php endif; ?>
