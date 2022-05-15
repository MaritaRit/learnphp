<?php

class Pet {
    public $name;
    public $id;
    public static $count = 1;

    public function __construct($name){
        $this->name = $name;
        $this->id = self::$count;
        self::$count++;
    }
    public static function createPetWithId($id, $name){
        $pet = new Pet($name);
        $pet->id = $id;
        return $pet;
    }
    public static function setCount($count){
        self::$count = $count;
    }
    public static function getName(){
        echo $this->name;
    }
}

$pet1 = new Pet('Nuustik');
$pet2 = new Pet('Pätu');
$pet3 = new Pet('Tripsu');
$pet4 = Pet::createPetWithId(44, 'Tondu');
Pet::setCount(4);

var_dump($pet4);
Pet::$count = 8;
Pet::$count = 10;
var_dump(Pet::$count);
var_dump(Pet::$count);
var_dump(Pet::$count);