<?php

class Fruits
{
    //create properties 
    public $name;
    public $color;

    //set name method
    public function set_name($name){
        $this->name = $name;
    }

    //get Name method
    public function get_name(){
        return $this->name;
    }

    //set Color method
    public function set_color($color){
        $this->color = $color;
    }

    //get Color method 
    public function get_color(){
        return $this->color;
    }
}

$bannana = new Fruits;
$bannana->set_name('Banana');

echo $bannana->get_name();
echo "<br>";

$apple = new Fruits;
$apple->set_name('Apple');

echo $apple->get_name();

echo "<br>";
echo "<br>";

$color = new Fruits;
$color->set_color("Red");

$color2 = new Fruits;
$color2->set_color("Blue");

echo "<br>";
echo $color->get_color();
echo "<br>";
echo $color2->get_color();