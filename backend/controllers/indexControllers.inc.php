<?php

require_once(__DIR__ . '/../controllers/companiesControllers.php');
require_once(__DIR__ . '/../controllers/contactsControllers.php');
require_once(__DIR__ . '/../controllers/invoicesControllers.php');
require_once(__DIR__ . '/../controllers/permissionsControllers.php');
require_once(__DIR__ . '/../controllers/rolesControllers.php');
require_once(__DIR__ . '/../controllers/typesControllers.php');
require_once(__DIR__ . '/../controllers/UsersControllers.php');

function sendJson($data) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
}
