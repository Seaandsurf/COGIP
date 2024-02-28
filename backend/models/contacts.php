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
}