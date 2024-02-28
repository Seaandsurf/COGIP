<?php 

class CompaniesController {
    
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_companies() {
        $companies = $this->pdo->query('SELECT * FROM Companies');
        return $companies->fetchAll(PDO::FETCH_ASSOC);
    }
}
