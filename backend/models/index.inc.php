<?php

require_once('./models/invoices.php');

function connect_db() {
    $dsn = 'mysql:dbname=cogip;host=db';
    $user = 'root';
    $password = 'KWmuLNjpzseXcTUNcnpz';
    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}
