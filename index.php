<?php

require_once('backend/api.php');
require_once('backend/models/connexion.php');


$pdo = connect_db();
$companiesController = new CompaniesController($pdo);
$companies = $companiesController->getAll_companies();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Companies</title>
</head>
<body>
    <h1>All Companies</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Country</th>
                <th>TVA</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
                <tr>
                    <td><?php echo $company['name']; ?></td>
                    <td><?php echo $company['country']; ?></td>
                    <td><?php echo $company['tva']; ?></td>
                    <td><?php echo $company['created_at']; ?></td>
                    <td><?php echo $company['updated_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>