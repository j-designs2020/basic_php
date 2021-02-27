<?php
$className = "Person"; 

class Person {

    

    private $name; 
    public $eyes; 
    public $age; 
    public $food;

    //sets variable for all in class
    public static $type = "Cat";

    public function __construct($name, $eyes, $age, $food){
        $this->name = $name; 
        $this->eyes = $eyes; 
        $this->age = $age; 
        $this->food = $food; 
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setFood($food){
        $this->food = $food;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return self::$type;
    } 

    public static function setType($newType){
        self::$type = $newType;
    }

}


