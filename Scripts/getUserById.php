<?php
    include '../Classes/database.php';

    if (isset($_GET['nome'])) {
        $database = new Database('usuarios');
        $name = $_GET['nome'];

        $users = $database->select("nome LIKE ?", null, null, '*', ["%$name%"]);

        if ($users) {
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
                echo 'Login: ' . $user['login'] . '<br><br>';
            }
        } else {
            echo 'Nenhum usuário encontrado com o nome "' . $name . '".';
        }
    } else {
        echo 'Por favor, insira um nome para pesquisar.';
    }
?>
