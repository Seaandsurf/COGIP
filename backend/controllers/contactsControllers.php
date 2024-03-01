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

    public function addNewContact() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Call Validation

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $company_id = $_POST['company_id'];

            $res = Contacts::insertContacts($name, $email, $phone, $company_id);

            sendJson($res);
        } else {
            print('404 Not Found');
            exit();
        }
    }
}
