<?php 
require_once(__DIR__ . '/../models/date.php');
require_once(__DIR__ . '/../models/types.php');
class TypesController {

    public function getAll_types() {
        $limit = intval($_GET['limit'] ?? '-1');

        $types = Types::getAll($limit);
        formatDataDates($types, ['created_at', 'updated_at']);
        
        sendJson($types);

    }

}