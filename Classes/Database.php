<?php

    class Database {
        private $dsn = 'mysql:host=localhost;dbname=pimba';
        private $user = 'root';
        private $password = '';
        private $table;
        public $connection;


        public function __construct(string $table = null)
        {
            $this->table = $table;
            $this->setConnection();
        }

        private function setConnection()
        {
            try {
                $this->connection = new PDO($this->dsn, $this->user, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('ERROR: ' . $e->getMessage());
            }
        }

        public function execute($query, $params = [])
        {
            try {
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            } catch (PDOException $e) {
                die('ERROR: ' . $e->getMessage());
            }
        }

        public function insert($values)
        {
            $fields = array_keys($values);
            $binds = array_pad([], count($fields), '?');
            $sql = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';
            $this->execute($sql, array_values($values));
            return $this->connection->lastInsertId();
        }

        public function select($where = null, $order = null, $limit = null, $fields = '*', $params = [])
        {
            $where = strlen($where) ? 'WHERE ' . $where : '';
            $order = strlen($order) ? 'ORDER BY ' . $order : '';
            $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

            $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

            return $this->execute($query, $params);
        }


        public function update($where, $values, $params = [])
        {
            $fields = array_keys($values);

            $set_clause = implode('=?, ', $fields) . '=?';

            $query = 'UPDATE ' . $this->table . ' SET ' . $set_clause . ' WHERE ' . $where;

            $all_params = array_merge(array_values($values), $params);

            $this->execute($query, $all_params);

            return true;
        }

        public function delete($where, $params = [])
        {
            $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;

            $this->execute($query, $params);

            return true;
        }

    }

?>