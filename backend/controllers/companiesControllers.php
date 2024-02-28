<?php 
require_once('./backend/models/date.php');
class CompaniesController {
    
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_companies() {
        $companieQuery = $this->pdo->query('SELECT * FROM companies');
        $companies= $companieQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($companies, ['created_at', 'updated_at']);
       
        return $companies;

    }
}
