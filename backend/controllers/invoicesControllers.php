<?php 

class InvoicesController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_invoices() {
        $invoices = $this->pdo->query('SELECT * FROM invoices');
        return $invoices->fetchAll(PDO::FETCH_ASSOC);
    }
}
