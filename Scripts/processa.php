<?php
    include '../Classes/Database.php';
    include '../Classes/ValidacaoCadastro.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $erros = ValidacaoCadastro::validarFormulario($_POST);

        if (count($erros) > 0) {
            $_SESSION['erros'] = implode('<br>', $erros);
            header("Location: ../cadastroUser.php");
            exit();
        }

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
            $_SESSION['sucesso'] = "Usuário cadastrado com sucesso. ID: {$insert_data}";
            header("Location: ../login.php");
//            echo "<script>
//                alert('Usuário cadastrado com sucesso. ID: {$insert_data}');
//                window.location.href = '../login.php';
//              </script>";
        } else {
            $_SESSION['erro'] = "Erro ao cadastrar usuário.";
            header("Location: ../cadastroUser.php");
            //            echo "<script>
//                alert('Erro ao cadastrar usuário.');
//                window.location.href = '../cadastroUser.php';
//              </script>";
        }
        exit();
    }
?>