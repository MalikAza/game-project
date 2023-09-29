<?php

namespace GameProject\DAO;

use GameProject\Connector;
use GameProject\DTO\User;
use LDAP\Result;

class UserDAO {
    private Connector $db;

    public function __construct() {
        $this->db = Connector::getInstance();
    }

    public function getById(int $id): User {
        $query = $this->db->query("SELECT * FROM users WHERE id = $id;");
        $data = $query->fetchAll();

        $user = new User;
        $user->__populate($data[0]);
        return $user;
    }

    /** 
     * @return User[]
     */
    public function getAll() {
        $query = $this->db->query("SELECT * FROM users;");
        $data = $query->fetchAll();

        $result = [];
        foreach ($data as $row) {
            $user = new User;
            $user->__populate($row);
            $result[] = $user;
        }

        return $result;
    }

    public function newRow(User $user) {
        $this->db->beginTransaction();
        $req = $this->db->prepare(
            'INSERT INTO users (email, pseudo, birth, password) VALUES (?,?,?,?)'
        );
        $req->execute([
            $user->getEmail(),
            $user->getPseudo(),
            $user->getBirth()->format('Y-m-d'),
            $user->getPassword()
        ]);

        $id = intval($this->db->lastInsertId());
        $newUser = $this->getById($id);

        if (!$req) {
            $this->db->rollBack();
            return false;
        }
        $this->db->commit();
        return $newUser;
    }

    public function updateRowById(int $id, User $user) {

    }

    public function deleteRowById(int $id): void {
        $query = $this->db->query("DELETE FROM users WHERE id = $id;");
    }
}