<?php 
require_once('models/connexion.php');
require_once('models/date.php');
require_once('models/invoices.php');

class InvoicesController {
    public function getAll_invoices() {
        $limit = intval($_GET['limit'] ?? '-1');
        $invoices = Invoices::getAllWithCompanyName($limit);
        formatDataDates($invoices, ['created_at', 'updated_at', 'date_due']);    
        // Défini dans "indexController.inc.php".
        sendJson($invoices);
    }
    public function addNewInvoice() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Call Validation
    
            $ref = $_POST['ref'];
            $id_company = $_POST['id_company'];
            $price = $_POST['price'];
            $date_due = $_POST['date_due'];
    
            $res = Invoices::insertInvoices($ref, $id_company, $price, $date_due);
    
            sendJson($res);
        } else {
            print('405 Method Not Allowed');
            exit();
        }
    }
}
