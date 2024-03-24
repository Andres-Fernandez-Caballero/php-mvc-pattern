<?php

namespace App\Database;

use PDO;

class MysqlConnector {
    private function connect():PDO {
        $host = $_ENV['DB_HOST'];
        $database = $_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $port = $_ENV['DB_PORT'];

        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
        return $pdo;
    }

    public function query(string $query, array $params=[]){
        $connection = $this->connect();

        $statement = $connection->prepare($query);
        $statement->execute($params);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC); // devuelve los datos de la base de datos como array asociativo
        return $results;
    }
    
}
