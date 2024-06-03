<?php

    namespace Classes;

    use Database;
    use Sexo;

    class Usuario {

        /**
         * Identificador único do usuário
         * @var integer
         */
        public $id;

        /**
         * Nome do usuário
         * @var string
         */
        public $nome;

        /**
         * E-mail do usuário
         * @var string
         */
        public $data_nascimento;

        /**
         * Sexo do usuário
         * @var Sexo
         */
        public Sexo $sexo;

        /**
         * Nome materno
         * @var string
         */
        public $nome_materno;

        /**
         * CPF do usuário
         * @var string
         */
        public $cpf;

        /**
         * Telefone do usuário
         * @var integer
         */
        public $telefone_celular;

        /**
         * Telefone fixo do usuário
         * @var integer
         */
        public $telefone_fixo;

        /**
         * Endereço do Usuário
         * @var string
         */
        public $endereco;

        /**
         * Complemento do Endereço
         * @var string
         */
        public $complemento;

        /**
         * Login do Usuário
         * @var string
         */
        public $login;

        /**
         * Senha do Usuário
         * @var string
         */
        public $senha;

        public function cadastrar()
        {
            // Converte a data para formato do Banco de dados
            $this->data_nascimento = date('Y-m-d H:i:s');
            $db = new Database('usuarios');
            $this->id = $db->insert([
                'nome' => $this->nome,
                'data_nascimento' => $this->data_nascimento,
                'sexo' => $this->sexo,
                'nome_materno' => $this->nome_materno,
                'cpf' => $this->cpf,
                'telefone_celular' => $this->telefone_celular,
                'telefone_fixo' => $this->telefone_fixo,
                'endereco' => $this->endereco,
                'complemento' => $this->complemento,
                'login' => $this->login,
                'senha' => $this->senha
            ]);
            return true;
        }

        /**
         * @return boolean
         */
        public function atualizar()
        {
            return (new Database('usuarios'))->update('id = ' . $this->id, [
                'nome' => $this->nome,
                'data_nascimento' => $this->data_nascimento,
                'sexo' => $this->sexo,
                'nome_materno' => $this->nome_materno,
                'cpf' => $this->cpf,
                'telefone_celular' => $this->telefone_celular,
                'telefone_fixo' => $this->telefone_fixo,
                'endereco' => $this->endereco,
                'complemento' => $this->complemento,
                'login' => $this->login,
                'senha' => $this->senha
            ]);
        }

        /**
         * @return boolean
         */
        public function excluir()
        {
            return (new Database('usuarios'))->delete('id = ' . $this->id);
        }

        /**
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return array
         */
        public static function getUsuarios($where = null, $order = null, $limit = null)
        {
            return (new Database('usuarios'))->select($where, $order, $limit)
                ->fetchAll(PDO::FETCH_CLASS, self::class);
        }

        /**
         * Método responsável por buscar uma vaga com base em seu ID
         * @param integer $id
         * @return Usuario
         */
        public static function getUsuarioId($id)
        {
            return (new Database('usuarios'))->select('id = ' . $id)
                ->fetchObject(self::class);
        }
    }

//        /**
//         * @param int $id
//         * @param string $nome
//         * @param string $data_nascimento
//         * @param Sexo $sexo
//         * @param string $nome_materno
//         * @param string $cpf
//         * @param int $telefone_celular
//         * @param int $telefone_fixo
//         * @param string $endereco
//         * @param string $complemento
//         * @param string $login
//         * @param string $senha
//         */
//        public function __construct(int $id,
//                                    string $nome,
//                                    string $data_nascimento,
//                                    Sexo $sexo,
//                                    string $nome_materno,
//                                    string $cpf,
//                                    int $telefone_celular,
//                                    int $telefone_fixo,
//                                    string $endereco,
//                                    string $complemento,
//                                    string $login,
//                                    string $senha)
//        {
//            $this->id = $id;
//            $this->nome = $nome;
//            $this->data_nascimento = $data_nascimento;
//            $this->sexo = $sexo;
//            $this->nome_materno = $nome_materno;
//            $this->cpf = $cpf;
//            $this->telefone_celular = $telefone_celular;
//            $this->telefone_fixo = $telefone_fixo;
//            $this->endereco = $endereco;
//            $this->complemento = $complemento;
//            $this->login = $login;
//            $this->senha = $senha;
//        }
