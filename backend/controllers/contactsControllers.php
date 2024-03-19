<?php 
require_once(__DIR__ . '/../models/connexion.php');
require_once(__DIR__ . '/../models/date.php');
require_once(__DIR__ . '/../models/contacts.php');
require_once(__DIR__ . '/../models/validation.php');
class ContactsController {
    public function getAll_contacts() {
        $limit = intval($_GET['limit'] ?? '-1');
    
        $contacts = Contacts::getAllContactsWithCompanyName($limit);
        formatDataDates($contacts, ['created_at', 'updated_at']);
        sendJson($contacts);
    }     

    public function addNewContact() {
        $validation_string = new validation();
        $validation_phone = new validation();
        $validation_mail = new validation();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $email = $_POST['mail'];
            $phone = $_POST['phone'];
            $company_id = $_POST['company-name'];

            if ($name && $email && $phone && $company_id 
            && $validation_string->string_Input($name)
            && $validation_phone->number_Input($phone )
            && $validation_mail->email_Input($email)){

            $res = Contacts::insertContacts($name, $email, $phone, $company_id);
            header('Location: ../../dashboard-contacts.html');
            exit();
        } else {
            echo "veuillez remplir tous les champs du formulaire avec les donnés adéquate <br>";
       
            echo $name . "<br>";
            echo $email . "<br>  --> example : example@example.com";
            echo $phone . "<br>   --> example : 1234567890";
            echo $company_id. "<br>";
        }
        } else {
            print('405 Method Not Allowed biz biz');
            exit();
        }
    }
    
    public function get_contactByID($id) {
        $pdo = connect_db();
    
        $sql = 'SELECT name, email, phone FROM contacts WHERE id = :id';
    
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $contact ? $contact : null;
    }

    public function update_contact($name, $email, $phone, $company_id, $contactId) {

        $isUpdated = Contacts::update_Contacts($name, $email, $phone, $company_id, $contactId);
    
        if ($isUpdated) {
            header('Location: ./dashboard.html');
            exit();
        } else {
            return false;
        }
    }

    public function deleteContact() {
        $contactId = intval($_GET['id']);
        Contacts::deleteContact($contactId);
        header('Location: ../../dashboard.html');
        exit();
    }
}
