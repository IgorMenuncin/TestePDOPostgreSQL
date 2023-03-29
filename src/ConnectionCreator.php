<?php

namespace Igor\TestePostgreSql;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $password = 'admin';
        $user = 'postgres';
        $db = 'teste'; 
        $host = 'localhost';
        $dns = "pgsql:host=$host;port=5432;dbname=$db";

        $connection = new PDO($dns, $user, $password);

        return $connection;
    }
}