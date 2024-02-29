<?php
declare(strict_types=1);
class Contacts {
    private string $name;
    private string $email;
    private string $phone;
    private string $created_at;
    private string $updated_at;

    public function __construct(string $name, string  $email, string  $phone, string $created_at, string $updated_at)
    {
        $this->name = $name;
        $this->email =  $email;
        $this->phone =  $phone;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    
    }
    public static function getAllContactsWithCompanyName($limit) {
        $pdo = connect_db();

        $baseSql = 'SELECT contacts.*, companies.name as company_name ';
        $baseSql .= 'FROM contacts INNER JOIN companies ON invoices.id_company = companies.id ';
        $baseSql .= 'ORDER BY created_at DESC ';

        if($limit > -1) {
            $contactsQuery = $pdo->prepare($baseSql . 'LIMIT :limit ');
            $contactsQuery->bindParam(':limit', $limit, PDO::PARAM_INT);
            $contactsQuery->execute();
        } else {
            $contactsQuery = $pdo->query($baseSql);
        }

        $contacts = $contactsQuery->fetchAll(PDO::FETCH_ASSOC);

       

        return $contacts;
    }
}