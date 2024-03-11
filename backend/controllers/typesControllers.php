<?php 
require_once('models/date.php');
class typesController {

    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_types() {
        $limit = intval($_GET['limit'] ?? '-1');

        $types = Types::getAll($limit);
        formatDataDates($types, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($types);

    }
}