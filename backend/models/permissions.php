<?php
declare(strict_types=1);
class Permissions {
    private string $name;
    private string $created_at;
    private string $updated_at;

    public function __construct(string $name, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    
    }
    public static function getAll($limit) {
        $pdo = connect_db();

        $baseSql = 'SELECT * FROM permissions';

        if($limit > -1) {
            $permissionsQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $permissionsQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $permissionsQuery->execute();
        } else {
            $permissionsQuery = $pdo->query($baseSql);
        }

        $permissions = $permissionsQuery->fetchAll(PDO::FETCH_ASSOC);

       

        return $permissions;
    }
}