<?php 

class ContactsController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_contacts() {
        $contactsQuery = $this->pdo->query('SELECT * FROM contacts');
        $contacts= $contactsQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($contacts, ['created_at', 'updated_at']);

        return $contacts;
    }
}
