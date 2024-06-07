<?php
    include '../Classes/database.php';

    $database = new Database('usuarios');

    $where = [];
    $params = [];

    $where_clause = implode(' AND ', $where);

    $stmt = $database->select($where_clause, null, null, '*', $params);

    $users = $stmt->fetchAll();

//    if (count($users) > 0) {
//        foreach ($users as $user) {
//            echo 'Nome: ' . $user['nome'] . '<br>';
//            echo 'Data de Nascimento: ' . $user['data_nascimento'] . '<br>';
//            echo 'Sexo: ' . $user['sexo'] . '<br>';
//            echo 'Nome Materno: ' . $user['nome_materno'] . '<br>';
//            echo 'CPF: ' . $user['cpf'] . '<br>';
//            echo 'Telefone Celular: ' . $user['telefone_celular'] . '<br>';
//            echo 'Telefone Fixo: ' . $user['telefone_fixo'] . '<br>';
//            echo 'Endereço: ' . $user['endereco'] . '<br>';
//            echo 'Complemento: ' . $user['complemento'] . '<br>';
//            echo 'Login: ' . $user['login'] . '<br>';
//            echo '<hr>';
//        }
//    } else {
//        echo 'Nenhum usuário encontrado.';
//    }

?>


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
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum usuário encontrado.</p>
            <?php endif; ?>
        </div>
        <div class="form-container">
            <button onclick="window.location.href='../consultaUser.php'">Voltar</button>
        </div>
    </body>
</html>