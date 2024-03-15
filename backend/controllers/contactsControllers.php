<?php 
require_once('models/connexion.php');
require_once('models/date.php');
require_once('models/contacts.php');
require_once('models/validation.php');
class ContactsController {
    public function getAll_contacts() {
        $limit = intval($_GET['limit'] ?? '-1');
    
        $contacts = Contacts::getAllContactsWithCompanyName($limit);
        formatDataDates($contacts, ['created_at', 'updated_at']);
            
        // Défini dans "indexController.inc.php".
        sendJson($contacts);
    }     

    public function addNewContact() {
        $validation_string = new validation();
        $validation_phone = new validation();
        $validation_mail = new validation();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Call Validation

            $name = $_POST['name'];
            $email = $_POST['mail'];
            $phone = $_POST['phone'];
            $company_id = $_POST['company-name'];

            if ($name && $email && $phone && $company_id 
            && $validation_string->string_Input($name)
            && $validation_phone->number_Input($phone )
            && $validation_mail->email_Input($email)){

            $res = Contacts::insertContacts($name, $email, $phone, $company_id);
            header('Location: http://localhost/COGIP/dashboard-contacts.html');
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

}
