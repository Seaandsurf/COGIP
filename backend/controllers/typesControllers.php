<?php 

class typesController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_types() {
        $types = $this->pdo->query('SELECT * FROM types');
        return $types->fetchAll(PDO::FETCH_ASSOC);
    }
}