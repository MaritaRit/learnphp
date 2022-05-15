<?php
class Box {
    public $width;
    public $height;
    public $lenght;
    public $material;
    public $color;

    public function __construct($width, $height, $lenght, $material, $color){
        $this->width = $width;
        $this->height = $height;
        $this->lenght = $lenght;
        $this->material = $material;
        $this->color = $color;
    }

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

$box1 = new Box(12, 10, 8, 'wood', 'red');
$box2 =new Box(22, 30, 4, 'metal', 'green');
var_dump($box1);
var_dump($box2);
var_dump($box1->volume());
var_dump($box2->volume());