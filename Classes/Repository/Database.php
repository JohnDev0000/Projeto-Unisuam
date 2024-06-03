<?php

    class Database {

        /**
         * Host de conexão com o banco de dados
         * @var string
         */
        const HOST = 'localhost';

        /**
         * Nome do banco de dados
         * @var string
         */
        const NAME = 'pimba';

        /**
         * Usuário do banco
         * @var string
         */
        const USER = 'root';

        /**
         * Senha de acesso ao banco de dados
         * @var string
         */
        const PASS = '';

        /**
         * Nome da tabela a ser manipulada
         * @var string
         */
        private $table;

        /**
         * Instancia de conexão com o banco de dados
         * @var PDO
         */
        private $connection;

        /**
         * Define a tabela e instancia e conexão
         * @param string|null $table
         */
        public function __construct(string $table = null){
            $this->table = $table;
            $this->setConnection();
        }

        private function setConnection()
        {
            try{
                $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
            }
        }

        /**
         * @param  string $query
         * @param  array  $params
         * @return PDOStatement
         */
        public function execute($query,$params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            }catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
            }
        }

        /**
         * @param  array $values [ field => value ]
         * @return integer ID inserido
         */
        public function insert($values){
            $fields = array_keys($values);
            $binds  = array_pad([],count($fields),'?');
            $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
            $this->execute($query,array_values($values));
            return $this->connection->lastInsertId();
        }

        /**
         * @param  string $where
         * @param  string $order
         * @param  string $limit
         * @param  string $fields
         * @return PDOStatement
         */
        public function select($where = null, $order = null, $limit = null, $fields = '*'){
            $where = strlen($where) ? 'WHERE '.$where : '';
            $order = strlen($order) ? 'ORDER BY '.$order : '';
            $limit = strlen($limit) ? 'LIMIT '.$limit : '';

            $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

            return $this->execute($query);
        }

        /**
         * @param  string $where
         * @param  array $values [ field => value ]
         * @return boolean
         */
        public function update($where, $values){
            $fields = array_keys($values);
            $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
            $this->execute($query,array_values($values));
            return true;
        }

        /**
         * @param  string $where
         * @return boolean
         */
        public function delete($where){
            $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
            $this->execute($query);
            return true;
        }
    }