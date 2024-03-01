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
}
