<?php

    class ValidacaoCadastro {

        public static function validarNome($nome)
        {
            return strlen($nome) >= 15 && strlen($nome) <= 80 && preg_match('/^[A-Za-z\s]+$/', $nome);
        }

//        public static function validarTelefone($telefone)
//        {
//            return preg_match('/^\(\+55\)[0-9]{2}-[0-9]{8}$/', $telefone);
//        }

        public static function validarLogin($login)
        {
            return preg_match('/^[A-Za-z0-9]{6}$/', $login);
        }

        public static function validarSenha($senha)
        {
            return preg_match('/^[A-Za-z0-9]{8}$/', $senha);
        }

//        public static function validarCPF($cpf)
//        {
//            $cpf = preg_replace('/[^0-9]/', '', $cpf);
//
//            if (strlen($cpf) != 11) {
//                return false;
//            }
//
//            if (preg_match('/(\d)\1{10}/', $cpf)) {
//                return false;
//            }
//
//            for ($t = 9; $t < 11; $t++) {
//                for ($d = 0, $c = 0; $c < $t; $c++) {
//                    $d += $cpf[$c] * (($t + 1) - $c);
//                }
//                $d = ((10 * $d) % 11) % 10;
//                if ($cpf[$c] != $d) {
//                    return false;
//                }
//            }
//
//            return true;
//        }

        public static function validarLoginDuplicado($login) {
            $database = new Database('usuarios');
            $result = $database->select("login = ?", null, null, 'login', [$login]);
            $existing_user = $result->fetch(PDO::FETCH_ASSOC);

            return !$existing_user;
        }

        public static function validarFormulario($dados)
        {
            $erros = [];

            $camposObrigatorios = [
                'nome', 'data_nascimento', 'sexo', 'nome_materno', 'cpf',
                'telefone_celular', 'telefone_fixo', 'endereco', 'login', 'senha', 'confirmacao_senha'
            ];
            foreach ($camposObrigatorios as $campo) {
                if (empty($dados[$campo])) {
                    $erros[$campo] = "O campo $campo deve ser preenchido.";
                }
            }

            if (!self::validarNome($dados['nome'])) {
                $erros[] = "Nome deve ter entre 15 e 80 caracteres alfabéticos.";
            }

//            if (!self::validarTelefone($dados['telefone_celular']) || !self::validarTelefone($dados['telefone_fixo'])) {
//                $erros[] = "Telefone deve estar no formato (+55)XX-XXXXXXXX.";
//            }

            if (!self::validarLogin($dados['login'])) {
                $erros[] = "Login deve ter exatamente 6 caracteres alfabéticos.";
            }

            if (!self::validarSenha($dados['senha'])) {
                $erros[] = "Senha deve ter exatamente 8 caracteres alfabéticos.";
            }

            if ($dados['senha'] !== $dados['confirmacao_senha']) {
                $erros[] = "As senhas não coincidem.";
            }

//            if (!self::validarCPF($dados['cpf'])) {
//                $erros[] = "CPF inválido.";
//            }

            if (!self::validarLoginDuplicado($dados['login'])) {
                $erros[] = "Erro: o login já está em uso.";
            }

            return $erros;
        }
    }