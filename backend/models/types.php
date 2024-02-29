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
}