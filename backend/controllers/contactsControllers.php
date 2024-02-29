<?php 
require_once('models/connexion.php');
require_once('models/date.php');
require_once('models/contacts.php');
class ContactsController {
    public function getAll_contacts() {
        $limit = intval($_GET['limit'] ?? '-1');

        $contacts = Contacts::getAllContactsWithCompanyName($limit);
        formatDataDates($contacts, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($contacts);
    }
}
