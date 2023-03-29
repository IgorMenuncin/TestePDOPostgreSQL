<?php

use Igor\TestePostgreSql\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$querry = "CREATE TABLE produtos (
    id_produto SERIAL PRIMARY KEY,
    name VARCHAR NOT NULL,
    estoque INT
);";

$connection->exec($querry);