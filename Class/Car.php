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
        return "My fav car is the " . $this->company . " " . $this->model . "."; 
    }

}

