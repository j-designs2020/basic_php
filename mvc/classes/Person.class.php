<?php

class Person {

    

    private $name; 
    public $age; 
    public $color;
    public $food;

    //sets variable for all in class
    public static $type = "Cat";

    public function __construct($name, $age, $color, $food){
        $this->name = $name; 
        $this->age = $age; 
        $this->color = $color; 
        $this->food = $food; 
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setColor($color){
        $this->color = $color;
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