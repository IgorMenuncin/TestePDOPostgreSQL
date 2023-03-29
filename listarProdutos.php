<?php

use Igor\TestePostgreSql\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$query = "SELECT * FROM produtos";

$produtos = $connection->query($query)->fetchAll(PDO::FETCH_ASSOC);

foreach ($produtos as $produto) {
    echo "Produto $produto[name] possui saldo $produto[estoque]" . PHP_EOL;
}