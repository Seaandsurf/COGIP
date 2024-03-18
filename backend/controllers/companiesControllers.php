<?php 
require_once(__DIR__ . '/../models/connexion.php');
require_once(__DIR__ . '/../models/date.php');
require_once(__DIR__ . '/../models/companies.php');
require_once(__DIR__ . '/../models/validation.php');

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
    $validation_int = new validation();
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        $name = $_POST['name'] ?? null;
        $country = $_POST['country'] ?? null;
        $tva = strtoupper(substr($country, 2)) . $_POST['tva'] ?? null;
        $type_id = $_POST['type_id'] ?? null;
        $supplier= $_POST['supplier'] ?? null;

        if ($name && $country && $tva && $type_id !== null && $supplier !== null
        && $validation_string->string_Input($name)
        && $validation_int->number_Input($tva)) {
      
            $supplier_bool = filter_var($supplier, FILTER_VALIDATE_BOOLEAN);
            $success = Companies::add_companies($name, $country, $tva, $type_id, $supplier_bool);
            header('Location: http://localhost/COGIP/dashboard-companies.html');
            exit();

        } else {
            echo "veuillez remplir tous les champs du formulaire avec les donnés adéquate <br>";
       
            echo $name . "<br>";
            echo $country . "<br>";
            echo $tva . "<br>";
            echo $type_id . "<br>";
        }
    } else {
        echo "Invalid request method!";
    }
}

public function get_companyByID($id) {
    $pdo = connect_db();

    $sql = 'SELECT name, type_id, tva, country, supplier FROM companies WHERE id = :id';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $company = $stmt->fetch(PDO::FETCH_ASSOC);

    return $company ? $company : null;
}
public function update_company($name, $type_id, $tva, $country, $companyId,$supplier) {
    $isUpdated = Companies::update_companies($name, $type_id, $tva, $country, $supplier, $companyId);

    if ($isUpdated) {
        header('Location: http://localhost/COGIP/dashboard');
        exit();
    } else {
        return false;
    }
}
}

 
