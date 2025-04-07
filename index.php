<?php

class Fruits
{
    //create properties 
    public $name;
    public $color;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }
}

$bannana = new Fruits;
$bannana->set_name('Banana');

echo $bannana->get_name();

$apple = new Fruits;
$apple->set_name('Apple');

echo $apple->get_name();
