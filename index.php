<?php

class Fruits
{
    //create properties 
    public $name;
    public $color;

    //create a constructor
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
   

    //get Name method
    public function get_name(){
        return $this->name;
    }

    //get Color method 
    public function get_color(){
        return $this->color;
    }
}

$bannana = new Fruits('Banana','Green');
echo $bannana->name;


echo "<br>";
echo "<br>";

$apple = new Fruits('Apple','Red');
echo "<br>";
echo $apple->name;
echo "    -> ";
echo $apple->color;
