<?php 

class permissionsController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_permissions() {
        $permissionsQuery = $this->pdo->query('SELECT * FROM permissions');
        $permissions= $permissionsQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($permissions, ['created_at', 'updated_at']);
        
        return $permissions;
    }
}