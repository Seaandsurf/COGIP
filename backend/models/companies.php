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
}