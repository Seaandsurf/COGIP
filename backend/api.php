<?php

// Exemple d'URL : http://localhost:8080/COGIP/backend/api.php/invoices?limit=5

require_once('controllers/indexControllers.inc.php');


$routes = [
    '/invoices' => fn() => (new InvoicesController())->getAll_invoices(),
    '/invoice_new' => fn() => (new InvoicesController())->addNewInvoice(),
    '/contacts' => fn() => (new ContactsController())->getAll_contacts(),
    '/contact_new' => fn() => (new ContactsController())->addNewContact(),
    '/contact_delete' => fn() => (new ContactsController())->deleteContact(),
    '/companies' => fn() => (new CompaniesController())->getAll_companies(),
    '/companies_new' => fn() => (new CompaniesController())->add_companie(),
    '/permissions' => fn() => (new PermissionsController())->getAll_permissions(),
    '/roles' => fn() => (new RolesController())->getAll_roles(),
    '/types' => fn() => (new TypesController())->getAll_types(),
    '/users' => fn() => (new UsersController())->getAll_users(),
];

$path = $_SERVER['PATH_INFO'];
$route = $routes[$path] ?? fn() => print ('404 Not Found');
$route();
