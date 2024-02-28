<?php 

class ContactsController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_contacts() {
        $companies = $this->pdo->query('SELECT * FROM contacts');
        return $companies->fetchAll(PDO::FETCH_ASSOC);
    }
}
