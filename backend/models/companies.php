<?php
declare(strict_types=1);
class Companies {
    private string $name;
    private string $country;
    private string $tva;
    private string $created_at;
    private string $updated_at;

    public function __construct(string $name, string  $country, string  $tva, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->country = $country;
        $this->tva =  $tva;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    
    }
    public static function getAllCompaniesWithTypeName($limit) {
        $pdo = connect_db();

        $baseSql = 'SELECT companies.*, types.name as types_name ';
        $baseSql .= 'FROM companies INNER JOIN types ON type.id_name = name.id ';
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
}