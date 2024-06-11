<?php
    include '../Classes/Database.php';

    $database = new Database('usuarios');

    $where = [];
    $params = [];

    $where_clause = implode(' AND ', $where);

    $stmt = $database->select($where_clause, null, null, '*', $params);

    $users = $stmt->fetchAll();

    include 'getUserResult.php';
?>

