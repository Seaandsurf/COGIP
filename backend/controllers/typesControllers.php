<?php 
require_once('models/date.php');
require_once('models/types.php');
class TypesController {

    public function getAll_types() {
        $limit = intval($_GET['limit'] ?? '-1');

        $types = Types::getAll($limit);
        formatDataDates($types, ['created_at', 'updated_at']);
        
        // Défini dans "indexController.inc.php".
        sendJson($types);

    }


}