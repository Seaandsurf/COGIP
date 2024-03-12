<?php
declare(strict_types=1);
class Roles {
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

        $baseSql = 'SELECT * FROM roles';

        if($limit > -1) {
            $rolesQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $rolesQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $rolesQuery->execute();
        } else {
            $rolesQuery = $pdo->query($baseSql);
        }

        $roles = $rolesQuery->fetchAll(PDO::FETCH_ASSOC);

        return $roles;
    }
}