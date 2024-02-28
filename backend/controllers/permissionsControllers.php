<?php 

class permissionsController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_permissions() {
        $permissions = $this->pdo->query('SELECT * FROM permissions');
        return $permissions->fetchAll(PDO::FETCH_ASSOC);
    }
}