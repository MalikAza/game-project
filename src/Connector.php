<?php

namespace GameProject;

use PDO;

class Connector {
    private string $host = "127.0.0.1";
    private string $port = "6603";
    private string $dbName = "game_project";
    private PDO $connection;

    private static Connector $instance;

    private function __construct() {
        $this->connection = new PDO(
            "mysql:host={$this->host};port={$this->port};dbname={$this->dbName}",
            'root',
            'helloworld'
        );
    }

    public static function getInstance() {
        if (!isset(self::$instance)) self::$instance = new Connector();

        return self::$instance;
    }
}