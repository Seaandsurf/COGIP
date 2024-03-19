<?php 

require_once(__DIR__ . '/../models/permissions.php');
require_once(__DIR__ . '/../models/connexion.php');
require_once(__DIR__ . '/../models/date.php');
class permissionsController {
    public function getAll_permissions() {
        $limit = intval($_GET['limit'] ?? '-1');

        $permissions = Permissions::getAll($limit);
        formatDataDates($permissions, ['created_at', 'updated_at']);
        sendJson($permissions);
  }


}
