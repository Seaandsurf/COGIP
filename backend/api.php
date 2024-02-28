<?php

require_once('./models/index.inc.php');
require_once('./controllers/index.inc.php');

$routes = [
    '/invoices' => fn() => (new InvoicesController())->getAll(),
    '/contacts' => fn() => (new ContactsController())->getAll(),
    '/companies' => fn() => (new CompaniesController())->getAll(),
];

$path = $_SERVER['PATH_INFO'];
$route = $routes[$path] ?? fn() => print('404 Not Found');
$route();
