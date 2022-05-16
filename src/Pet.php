<?php
namespace App;


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
    public function __get($property){
        var_dump('__get:'.$property);
    }
    public function __set($property, $value){
        var_dump('__set:'.$property. 'value:' . $value);
    }
    public function __toString(){
       return 'some cool pet with name '. $this->name;
    }
}
