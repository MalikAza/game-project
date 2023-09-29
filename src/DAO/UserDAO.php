<?php

namespace GameProject\DAO;

use GameProject\Connector;
use GameProject\DTO\User;

class UserDAO {
    private Connector $db;

    public function __construct() {
        $this->db = Connector::getInstance();
    }

    public function getById(int $id): User {
        $query = $this->db->query("SELECT * FROM users WHERE id = $id;");
        $data = $query->fetchAll();

        return new User($data);
    }

    /** 
     * @return User[]
     */
    public function getAll() {
        $query = $this->db->query("SELECT * FROM users;");
        $data = $query->fetchAll();

        $result = [];
        foreach ($data as $row) {
            $result[] = new User($row);
        }

        return $result;
    }

    public function newRow(User $user) {

    }

    public function updateRowById(int $id, User $user) {

    }

    public function deleteRowById(int $id): void {
        $query = $this->db->query("DELETE FROM users WHERE id = $id;");
    }
}