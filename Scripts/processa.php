<?php
    include '../Classes/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $database = new Database('usuarios');

        $login = $_POST['login'];
        $result = $database->select("login = ?", null, null, 'login', [$login]);
        $existing_user = $result->fetch(PDO::FETCH_ASSOC);

        if ($existing_user) {
            echo "<script>
                alert('Erro: o login já está em uso.');
                setTimeout(function() {
                    window.location.href = '../cadastroUser.php';
                }, 2000);
              </script>";
            exit();
        }

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
            'login' => $login,
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ];

        $insert_data = $database->insert($dados_form);

        if ($insert_data) {
            echo "<script>
                alert('Usuário cadastrado com sucesso. ID: {$insert_data}');
                window.location.href = '../login.php';
              </script>";
            exit();
        } else {
            echo "<script>
                alert('Erro ao cadastrar usuário.');
                window.location.href = '../cadastroUser.php';
              </script>";
        }
    }
?>