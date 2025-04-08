<?php
 
 abstract class Car {
    public $name;
    

    //construct
    public function __construct($name){
        $this->name = $name;
       
    }

    //abstract intro method
    abstract public function intro() : String;
    

 }

//child class of Parent class Car
 class Volvo extends Car {
    public function intro(): String
    {
        return "This car is a $this->name is made in Garmany";
    }
}

//class insta.
 $type = new Volvo("Volvo");

 echo $type->intro();

//define interface (interface does not need property declearation)
 interface Animal{
    public function makeSound();
 }

 //create child class
 class Cat implements Animal {
    public function makeSound(){
        return "<br> Meeewwwo";
    }
 }

 $cat = new Cat;

 echo $cat->makeSound();

/**class Fruits
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
echo $apple->color;*/