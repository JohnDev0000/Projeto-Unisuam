<?php

    use Classes\Usuario;

    require 'vendor/autoload.php';
    require 'Classes/Repository/Database.php';
    require 'Classes/Usuario.php';
    require 'cadastroUser.php';

    $db = new Database("usuarios");

    require 'processa.php';

    if (isset($_POST['nome'],
        $_POST['data_nascimento'],
        $_POST['sexo'],
        $_POST['nome_materno'],
        $_POST['cpf'],
        $_POST['telefone_celular'],
        $_POST['telefone_fixo'],
        $_POST['endereco'],
        $_POST['complemento'],
        $_POST['login'],
        $_POST['senha'])) {

        $usuario = new Usuario();
        $usuario->nome = $_POST['nome'];
        $usuario->data_nascimento = $_POST['data_nascimento'];
        $usuario->sexo = $_POST['sexo'];
        $usuario->nome_materno = $_POST['nome_materno'];
        $usuario->cpf = $_POST['cpf'];
        $usuario->telefone_celular = $_POST['telefone_celular'];
        $usuario->telefone_fixo = $_POST['telefone_fixo'];
        $usuario->endereco = $_POST['endereco'];
        $usuario->complemento = $_POST['complemento'];
        $usuario->login = $_POST['login'];
        $usuario->senha = $_POST['senha'];

        echo "<pre>";
        print_r($usuario);
        echo "</pre>";
        exit;
    }

//
//        $usuario->cadastrar();
//        header('location: login.php?status=success');
//        exit;



?>
