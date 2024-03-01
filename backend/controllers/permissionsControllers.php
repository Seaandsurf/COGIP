<?php 

require_once('models/permissions.php');
require_once('models/connexion.php');
require_once('models/date.php');
class permissionsController {
    public function getAll_permissions() {
        $limit = intval($_GET['limit'] ?? '-1');

        $permissions = Permissions::getAll($limit);
        formatDataDates($permissions, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($permissions);
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
