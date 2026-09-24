<?php
namespace App\Models;

class Candidate {
    public $id;
    public $name;
    public $email;
    public $age;
    public $gender;
    
    public function __construct($name = '', $email = '', $age = null, $gender = '') {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->gender = $gender;
    }
}