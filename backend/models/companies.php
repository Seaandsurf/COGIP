<?php
declare(strict_types=1);
class Companies {
    private string $name;
    private string $country;
    private string $tva;
    private string $created_at;
    private string $updated_at;
    private bool $supplier;

    public function __construct(string $name, string  $country, string  $tva, string $created_at, string $updated_at, bool $supplier)
    {
        $this->name = $name;
        $this->country = $country;
        $this->tva =  $tva;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->supplier = $supplier;
    
    }
    public static function getAllCompaniesWithTypeName($limit) {
        $pdo = connect_db();

        $baseSql = 'SELECT companies.*, types.name as types_name ';
        $baseSql .= 'FROM companies INNER JOIN types ON companies.type_id = types.id ';
        $baseSql .= 'ORDER BY created_at DESC ';

        if($limit > -1) {
            $companiesQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $companiesQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $companiesQuery->execute();
        } else {
            $companiesQuery = $pdo->query($baseSql);
        }

        $companies = $companiesQuery->fetchAll(PDO::FETCH_ASSOC);

        return $companies;
    }

    public static function add_companies($name, $country, $tva, $type_id, $supplier) {
        $pdo = connect_db();
    
        $sql = 'INSERT INTO companies (name, country, tva, type_id, supplier) VALUES (:name, :country, :tva, :type_id, :supplier)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':country', $country, PDO::PARAM_STR);
        $stmt->bindParam(':tva', $tva, PDO::PARAM_STR);
        $stmt->bindParam(':type_id', $type_id, PDO::PARAM_STR);
        $stmt->bindParam(':supplier', $supplier, PDO::PARAM_BOOL);
    
        return $stmt->execute();
    }
}