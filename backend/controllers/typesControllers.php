<?php 
require_once('models/date.php');
class typesController {
    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_types() {
        
        $typesQuery = $this->pdo->query('SELECT * FROM types');
        $types= $typesQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($roles, ['created_at', 'updated_at']);
        return $types;
    }
}