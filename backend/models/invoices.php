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
}
