<?php 
require_once(__DIR__ . '/../models/date.php');
class usersController {
    public function getAll_users() {

        $limit = intval($_GET['limit'] ?? '-1');

        $users = Users::getAll($limit);
        formatDataDates($users, ['created_at', 'updated_at']);
        
        sendJson($users);
    }
}