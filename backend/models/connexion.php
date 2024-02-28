<?php

require_once('backend/models/companies.php');
require_once('backend/models/contacts.php');
require_once('backend/models/invoices.php');
require_once('backend/models/permissions.php');
require_once('backend/models/roles.php');
require_once('backend/models/types.php');
require_once('backend/models/users.php');

// function connect_db() {
//     $host = "localhost";
//     $database = "cogip";
//     $username = "root";
//     $password ="";
//     $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
//     return $pdo;
// }


function connect_db() {
    $dsn = 'mysql:dbname=cogip;host=db';
    $user = 'root';
    $password = 'KWmuLNjpzseXcTUNcnpz';
    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}