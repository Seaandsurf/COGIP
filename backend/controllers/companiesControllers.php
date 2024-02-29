<?php 
require_once('models/connexion.php');
require_once('models/date.php');
require_once('models/companies.php');

class CompaniesController {
    public function getAll_companies() {
        $limit = intval($_GET['limit'] ?? '-1');

        $companies = Companies::getAllCompaniesWithTypeName($limit);
        formatDataDates($companies, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($companies);
    }
}
