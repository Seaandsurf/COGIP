<?php
// thomas, mathias, robin : changer mots de passe
function connect_db()
{
    $host = "localhost";
    $database = "cogip";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    return $pdo;
}


 /*
// alice
function connect_db() {
    $dsn = 'mysql:dbname=cogip;host=db';
    $user = 'root';
    $password = 'KWmuLNjpzseXcTUNcnpz';
    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}
*/
