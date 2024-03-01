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

    public static function getAllContactsWithCompanyName($limit) 
    {
        $pdo = connect_db();

        $baseSql = 'SELECT contacts.*, companies.name as company_name ';
        $baseSql .= 'FROM contacts INNER JOIN companies ON contacts.company_id = companies.id ';
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

    public static function insertContacts($name, $email, $phone, $company_id)
    {
        try {
            $pdo = connect_db();

            $sql = 'INSERT INTO contacts (name, email, phone, company_id) VALUES (:name, :email, :phone, :company_id)';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);

            return [
                "result" => $stmt->execute()
            ];
        } catch (PDOException $e) {
            return [
                "result" => false,
                "error" => $e
            ];
        }
    }
}