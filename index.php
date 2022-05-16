<?php

require_once "vendor/autoload.php";

use App\Pet;
use App\Dog;
use App\Animals\Cat;

$faker = Faker\Factory::create();
echo $faker->realText();
$cat = new Cat();
$dog = new Dog();
$pet1 = new Pet('Nuustik');
$pet2 = new Pet('Pätu');
$pet3 = new Pet('Tripsu');
$pet4 = Pet::createPetWithId(44, 'Tondu');
Pet::setCount(4);
var_dump($pet1->color);
$pet1->color = 'brown';
echo $pet1;
var_dump($pet4);
Pet::$count = 8;
Pet::$count = 10;
var_dump(Pet::$count);
var_dump(Pet::$count);
var_dump(Pet::$count);