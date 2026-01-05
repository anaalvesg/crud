<?php

$json = file_get_contents('php://input'); // pegando o conteudo enviado do js
$data = json_decode($json); // convertendo pra objeto

// conexao com o bd
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=gemas_db", "root", "");

// preparando o insert no banco
$stmt = $pdo->prepare("INSERT INTO gemas (nome, categoria, idSistema, dureza) VALUES (:nome, :categoria, :sistema, :dureza)");

// executando o insert
$stmt->execute([
    ':nome' => $data->nome,
    ':categoria' => $data->categoria,
    ':sistema' => $data->sistema,
    ':dureza' => $data->dureza,
]);