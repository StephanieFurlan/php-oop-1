<?php 


class Person {
  
    public $name;
    public $lastname;
    public $dateOfBirth;

    function __construct($name, $lastname, $dateOfBirth) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->dateOfBirth = $dateOfBirth;
      }

    function get_name() {
        return $this->name;
    }
    function get_lastname() {
        return $this->lastname;
    }
    function get_dateOfBirth() {
        return $this->dateOfBirth;
    }
}




?>