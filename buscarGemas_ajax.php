<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=gemas_db", "root", "");

$stmt = $pdo->prepare(
    "SELECT 
    gemas.id,
    gemas.nome, 
    gemas.categoria, 
    sistemas.nome AS sistema_cristalino,
    gemas.dureza
    FROM gemas
    JOIN sistemas ON sistemas.id = gemas.idSistema");

$stmt->execute();
echo json_encode(["data"=>$stmt->fetchAll()]);