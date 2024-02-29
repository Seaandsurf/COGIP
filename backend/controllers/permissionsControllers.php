<?php 
require_once('models/date.php');
class permissionsController {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAll_permissions() {
        $permissionsQuery = $this->pdo->query('SELECT * FROM permissions');
        $permissions= $permissionsQuery->fetchAll(PDO::FETCH_ASSOC);
        formatDataDates($permissions, ['created_at', 'updated_at']);

        return $permissions;
    }
}

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
