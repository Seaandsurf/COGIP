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
}
