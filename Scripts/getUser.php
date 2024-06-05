<?php
    include '../Classes/database.php';

    $database = new Database('usuarios');

    $where = [];
    $params = [];

    if (!empty($_GET['nome'])) {
        $where[] = 'nome LIKE ?';
        $params[] = '%' . $_GET['nome'] . '%';
    }

    if (!empty($_GET['cpf'])) {
        $where[] = 'cpf = ?';
        $params[] = $_GET['cpf'];
    }

    $where_clause = implode(' AND ', $where);

    $stmt = $database->select($where_clause, null, null, '*', $params);

    $users = $stmt->fetchAll();

    if (count($users) > 0) {
        foreach ($users as $user) {
            echo 'Nome: ' . $user['nome'] . '<br>';
            echo 'Data de Nascimento: ' . $user['data_nascimento'] . '<br>';
            echo 'Sexo: ' . $user['sexo'] . '<br>';
            echo 'Nome Materno: ' . $user['nome_materno'] . '<br>';
            echo 'CPF: ' . $user['cpf'] . '<br>';
            echo 'Telefone Celular: ' . $user['telefone_celular'] . '<br>';
            echo 'Telefone Fixo: ' . $user['telefone_fixo'] . '<br>';
            echo 'Endereço: ' . $user['endereco'] . '<br>';
            echo 'Complemento: ' . $user['complemento'] . '<br>';
            echo 'Login: ' . $user['login'] . '<br>';
            echo '<hr>';
        }
    } else {
        echo 'Nenhum usuário encontrado.';
    }

