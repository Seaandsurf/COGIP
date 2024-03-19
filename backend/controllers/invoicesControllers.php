<?php 
require_once(__DIR__ . '/../models/connexion.php');
require_once(__DIR__ . '/../models/date.php');
require_once(__DIR__ . '/..//models/invoices.php');
require_once(__DIR__ . '/../models/validation.php');
class InvoicesController {
    public function getAll_invoices() {
        $limit = intval($_GET['limit'] ?? '-1');
        $invoices = Invoices::getAllWithCompanyName($limit);
        formatDataDates($invoices, ['created_at', 'updated_at', 'date_due']);    
        // Défini dans "indexController.inc.php".
        sendJson($invoices);
    }
    public function addNewInvoice() {
        $validation_reference = new validation();
        $validation_price= new validation();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ref = $_POST['reference'];
            $id_company = $_POST['company-name'];
            $price = $_POST['price'];
            $date_due = $_POST['date'];

    if ($ref && $id_company && $price && $date_due
    && $validation_reference->number_Input($ref)
    && $validation_price->number_Input($price)){

            $res = Invoices::insertInvoices($ref, $id_company, $price, $date_due);
            header('Location:../../dashboard-invoices.html');
            exit();
        }else {
            echo "veuillez remplir tous les champs du formulaire avec les donnés adéquate <br>";
    
            echo $ref . "<br>  --> doit etre numeric";
            echo $price . "<br>   --> doit etre numeric";
    
        }
        } else {
            print('405 Method Not Allowed');
            exit();
        }
    }

    public function get_invoiceByID($id) {
        $pdo = connect_db();
    
        $sql = 'SELECT ref, price FROM invoices WHERE id = :id';
    
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        $invoice = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $invoice ? $invoice: null;
    }
    public function update_invoice($ref, $price, $company_id, $invoiceID) {

        $isUpdated = Invoices::update_invoices($ref, $price, $company_id,$invoiceID);
    
        if ($isUpdated) {
            header('Location: ./dashboard');
            exit();
        } else {     
            return false;
        }
    }
}


