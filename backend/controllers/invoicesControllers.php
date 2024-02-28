<?php 

class InvoicesController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_invoices() {
        $invoicesQuery = $this->pdo->query('SELECT * FROM invoices');
        $invoices= $invoicesQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($invoices, ['created_at', 'updated_at']);

        return $invoices;
    }
}
