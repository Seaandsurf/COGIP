<?php 

class usersController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_users() {
        $usersQuery = $this->pdo->query('SELECT * FROM users');
        $users= $usersQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($users, ['created_at', 'updated_at']);
        
        return $users;
    }
}