<?php
    include '../Classes/database.php';

    $database = new Database('usuarios');

    $where = [];
    $params = [];

    if (!empty($_GET['nome'])) {
        $where[] = 'nome LIKE ?';
        $params[] = '%' . $_GET['nome'] . '%';
    }

    $where_clause = implode(' AND ', $where);

    $stmt = $database->select($where_clause, null, null, '*', $params);

    $users = $stmt->fetchAll();

    include 'getUserResult.php';
?>