<?php
class Validation {
    public function string_Input($value) {
        if (!is_string($value)) {
            return false;
        }

        return true;
    }

    public function number_Input($value) {

        if (!is_numeric($value)) {
            return false;
        }
        return true;
    }

    public function email_Input($value){
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}
    public function lenght_Input ($value){
        $value_lenght = strlen($value);
        if ($value_lenght > 100){
            return false;
        }
        return true;
    }

    public function password_strenght($value){
        
    }

    public function phone_input ($value){
    if(!preg_match('/^[0-9]{10}+$/', $value)) {
        return false;
    } else {
        return true;
    }
}
}