<?php


class Car {
    //public $name; // everyone has access
    //private $model; // extended classes have access, its better to use private by default
    //protected $year = 2020; // extended and child of extended also have access


    private $company;
    private $model;
    public $year = 2020;

    public function __construct($company, $model){
        $this->company = $company;
        $this->model = $model;

    }

    public function getText(){
        return "Current car is " .  $this->model . " from " . $this->company; 
    }

// getter and setter
    public function getBrand(){
        return $this->company;
    }
     
     public function changeBrand($change){
        $this->company = $change;
     }
}

