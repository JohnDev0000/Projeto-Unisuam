<?php
    include 'Classes/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $database = new Database('usuarios');

        $dados_form = [
            'nome' => $_POST['nome'],
            'data_nascimento' => $_POST['data_nascimento'],
            'sexo' => $_POST['sexo'],
            'nome_materno' => $_POST['nome_materno'],
            'cpf' => $_POST['cpf'],
            'telefone_celular' => $_POST['telefone_celular'],
            'telefone_fixo' => $_POST['telefone_fixo'],
            'endereco' => $_POST['endereco'],
            'complemento' => $_POST['complemento'],
            'login' => $_POST['login'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ];

        $insert_data = $database->insert($dados_form);

        if ($insert_data) {
            echo "Usuário cadastrado com sucesso. ID: {$insert_data}";
        } else {
            echo "Erro ao cadastrar usuário.";
        }

    }
?>