<?php 

class usersController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_users() {
        $users = $this->pdo->query('SELECT * FROM users');
        return $users->fetchAll(PDO::FETCH_ASSOC);
    }
}