<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados da Consulta</title>
        <link rel="stylesheet" href="../CSS/consultaUser_style.css">
    </head>
    <body>
        <div class="container">
            <?php if (count($users) > 0): ?>
                <?php foreach ($users as $user): ?>
                    <div class="user-card">
                        <h2><?php echo htmlspecialchars($user['nome']); ?></h2>
                        <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($user['data_nascimento']); ?></p>
                        <p><strong>Sexo:</strong> <?php echo htmlspecialchars($user['sexo']); ?></p>
                        <p><strong>Nome Materno:</strong> <?php echo htmlspecialchars($user['nome_materno']); ?></p>
                        <p><strong>CPF:</strong> <?php echo htmlspecialchars($user['cpf']); ?></p>
                        <p><strong>Telefone Celular:</strong> <?php echo htmlspecialchars($user['telefone_celular']); ?></p>
                        <p><strong>Telefone Fixo:</strong> <?php echo htmlspecialchars($user['telefone_fixo']); ?></p>
                        <p><strong>Endereço:</strong> <?php echo htmlspecialchars($user['endereco']); ?></p>
                        <p><strong>Complemento:</strong> <?php echo htmlspecialchars($user['complemento']); ?></p>
                        <p><strong>Login:</strong> <?php echo htmlspecialchars($user['login']); ?></p>
                        <form action="deleteUser.php" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                            <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                            <input type="submit" value="Excluir" class="delete-button">
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="color: orange"><strong>Nenhum usuário encontrado.</strong></p>
            <?php endif; ?>
        </div>
        <div class="form-container">
            <button onclick="window.location.href='../consultaUser.php'">Voltar</button>
        </div>
</html>