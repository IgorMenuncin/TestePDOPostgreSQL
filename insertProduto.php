<?php

use Igor\TestePostgreSql\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$querry = "INSERT INTO produtos (name, estoque)
    VALUES ('marmore', 500);";

$connection->query($querry);

$querry = "INSERT INTO produtos (name, estoque)
    VALUES ('granito', 200);";

$connection->query($querry);

$querry = "INSERT INTO produtos (name, estoque)
    VALUES ('madeira', 100);";

$connection->query($querry);

$querry = "INSERT INTO produtos (name, estoque)
    VALUES ('cascalho', 1200);";

$connection->query($querry);