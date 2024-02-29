<?php 
require_once('models/date.php');
class RolesController {
    
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_roles() {
        $rolesQuery = $this->pdo->query('SELECT * FROM roles');
        $roles= $rolesQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($roles, ['created_at', 'updated_at']);
       
        return $roles;

    }
}