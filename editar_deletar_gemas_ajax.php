<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=gemas_db", "root", "");

$action = $_POST['action'];

// loopando pq veio em array
foreach($_POST['data'] as $id => $campos) {
        $nome = $campos['nome'];
        $categoria = $campos['categoria'];
        $idSistema = isset($campos['idSistema']) ? $campos[':idSistema'] : null;
        $dureza = $campos['dureza'];

    if ($action === 'edit') {
        $stmt = $pdo->prepare('
            UPDATE gemas
            SET nome = :nome,
                categoria = :categoria,
                idSistema = :idSistema,
                dureza = :dureza
            WHERE id = :id
        ');

        $stmt->execute([
            ':id' => $id,
            ':nome' => $nome,
            ':categoria' => $categoria,
            ':idSistema' => $idSistema,
            ':dureza' => $dureza,
        ]);
    } else if ($action === 'remove') {
        $stmt = $pdo->prepare('
            DELETE FROM gemas
            WHERE id = :id
        ');

        $stmt->execute([
            ':id' => $id,
        ]);
    };
};