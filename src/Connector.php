<?php

namespace GameProject;

use PDO;

class Connector extends PDO {
    private string $host = "127.0.0.1";
    private string $port = "6603";
    private string $dbName = "game_project";

    private static PDO $instance;

    private function __construct() {
        self::$instance = parent::__construct(
            "mysql:host={$this->host};port={$this->port};dbname={$this->dbName}",
            'root',
            'helloworld'
        );
    }

    public static function getInstance() {
        if (!isset(self::$instance)) new Connector();

        return self::$instance;
    }
}