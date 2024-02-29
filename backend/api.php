<?php

require_once('backend/models/companies.php');
require_once('backend/models/contacts.php');
require_once('backend/models/invoices.php');
require_once('backend/models/permissions.php');
require_once('backend/models/roles.php');
require_once('backend/models/types.php');
require_once('backend/models/users.php');

require_once('backend/controllers/companiesControllers.php');
require_once('backend/controllers/contactsControllers.php');
require_once('backend/controllers/invoicesControllers.php');
require_once('backend/controllers/permissionsControllers.php');
require_once('backend/controllers/rolesControllers.php');
require_once('backend/controllers/typesControllers.php');
require_once('backend/controllers/UsersControllers.php');

$routes = [
    '/invoices' => fn() => (new InvoicesController())->getAll_invoices(),
    '/contacts' => fn() => (new ContactsController())->getAll_contacts(),
    '/companies' => fn() => (new CompaniesController())->getAll_companies(),
    '/permissions' => fn() => (new PermissionsController())->getAll_permissions(),
    '/roles' => fn() => (new RolesController())->getAll_roles(),
    '/types' => fn() => (new TypesController())->getAll_types(),
    '/users' => fn() => (new UsersController())->getAll_users(),
  
];
/*
$path = $_SERVER['PATH_INFO'];
$route = $routes[$path] ?? fn() => print('404 Not Found');
$route();
*/
