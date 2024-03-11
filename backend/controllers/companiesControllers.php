<?php 
require_once('models/connexion.php');
require_once('models/date.php');
require_once('models/companies.php');
require_once('models/validation.php');

class CompaniesController {
    public function getAll_companies() {
        $limit = intval($_GET['limit'] ?? '-1');

        $companies = Companies::getAllCompaniesWithTypeName($limit);
        formatDataDates($companies, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($companies);
    }

public function add_companie (){
    $validation_string = new validation();
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        $name = $_POST['name'] ?? null;
        $country = $_POST['country'] ?? null;
        $tva = $_POST['tva'] ?? null;
        $type_id = $_POST['type_id'] ?? null;

        if ($name && $country && $tva && $type_id 
        && $validation_string->string_Input($name)) {
      
            $success = Companies::add_companies($name, $country, $tva, $type_id);
            sendJson($success);
            if ($success) {
                echo " ca marche !!! yahooo !!!!";
            } else {
                echo "Failed to insert data!";
            }
        } else {
            echo "veuillez remplir tous les champs du formulaire <br>";
       
            echo $name . "<br>";
            echo $country . "<br>";
            echo $tva . "<br>";
            echo $type_id . "<br>";

        }
    } else {
        echo "Invalid request method!";
    }
}
}

 
