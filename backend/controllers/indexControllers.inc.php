<?php

require_once('C:\mamp\www\COGIP\backend\controllers\companiesControllers.php');
require_once('controllers/companiesControllers.php');
require_once('controllers/contactsControllers.php');
require_once('controllers/invoicesControllers.php');
require_once('controllers/permissionsControllers.php');
require_once('controllers/rolesControllers.php');
require_once('controllers/typesControllers.php');
require_once('controllers/UsersControllers.php');

function sendJson($data)
{
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
}
