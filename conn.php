<?php
    class DbConnection
    {
        public static function DbConnection()
        {
            $host = 'localhost';
            $dbname = 'pimba'; // Nome do banco de dados
            $user = 'root'; // usuario do banco de dados
            $password = ''; // senha do banco de dados
            $dsn = "mysql:host=$host;dbname=$dbname";

            try {
                $pdo = new PDO($dsn, $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                return $pdo;
            } catch (PDOException $e) {
                return 'Connection failed: ' . $e->getMessage();
            }
        }
    }
?>
