<?php

require_once('backend/api.php');

require_once('backend/models/connexion.php');


$pdo = connect_db();


$rolesController = new rolesController($pdo);

// Call the controller method to get all companies
$roles = $rolesController->getAll_roles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Roles</title>
</head>
<body>
    <h1>All Roles</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?php echo $role['name']; ?></td>
                    <td><?php echo $role['created_at']; ?></td>
                    <td><?php echo $role['updated_at']; ?></td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>