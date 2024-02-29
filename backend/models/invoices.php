<?php
declare(strict_types=1);
class Invoices {
    private string $ref;
    private string $created_at;
    private string $updated_at;
    private string $date_due;

    public function __construct(string $ref, string $created_at, string $updated_at, string $date_due)
    {
        $this->ref = $ref;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->date_due = $date_due;
    }

    public static function getAllWithCompanyName($limit) {
        $pdo = connect_db();

        $baseSql = 'SELECT invoices.*, companies.name as company_name ';
        $baseSql .= 'FROM invoices INNER JOIN companies ON invoices.id_company = companies.id ';
        $baseSql .= 'ORDER BY created_at DESC ';

        if($limit > -1) {
            $invoicesQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $invoicesQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $invoicesQuery->execute();
        } else {
            $invoicesQuery = $pdo->query($baseSql);
        }

        $invoices = $invoicesQuery->fetchAll(PDO::FETCH_ASSOC);

       

        return $invoices;
    }
}
