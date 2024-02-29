<?php
declare(strict_types=1);
class Types {
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

        $baseSql = 'SELECT * FROM types';

        if($limit > -1) {
            $typesQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $typesQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $typesQuery->execute();
        } else {
            $typesQuery = $pdo->query($baseSql);
        }

        $types = $typesQuery->fetchAll(PDO::FETCH_ASSOC);

       

        return $types;
    }
}