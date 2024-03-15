<?php

require_once 'C:\laragon\www\COGIP\backend\controllers\companiesControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\contactsControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\invoicesControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\permissionsControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\rolesControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\typesControllers.php';
require_once 'C:\laragon\www\COGIP\backend\controllers\usersControllers.php';

function sendJson($data) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
}