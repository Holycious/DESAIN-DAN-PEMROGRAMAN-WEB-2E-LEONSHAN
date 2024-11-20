<?php

// CLASS CAR
// class Car
// {
//     private $model;
//     private $color;

//     public function __construct($model, $color )
//     {
//         $this->model = $model;
//         $this->color = $color;        
//     }

//     public function getModel()
//     {
//         return $this ->model;
//     }

//     public function setColor($color)
//     {
//         $this->color = $color;
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }
// }
class Car
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created. <br>";
        $this->brand = $brand;      
    }

    public function getBrand()
    {
        return $this ->brand;
    }

    public function  __destruct()
    {
        echo "The car is destroyed. <br>";
    }
}

// CLASS ANIMAL
class Animal
{   
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {   
        return $this->color;
    }
    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends Animal
{
    public function meow()
    {
        echo $this->name. " says meow!<br>";
    }

}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

// CLASS SHAPE
interface Shape
{
    public function calculateArea();
}
interface Color
{
    public function getColor();
}
class Circle implements Shape, Color
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this ->radius = $radius;
        $this ->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

// class Rectangle extends Shape
// {
//     private $width;
//     private $height;

//     public function __construct($width, $height )
//     {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea()
//     {
//         return $this->width * $this->height;
//     }
// }
// function printArea(Shape $shape)
// {
//     echo "Area: " . $shape->calculateArea() . "<br>";
// }

// OBJECT INITIATE

// $rectangle = new Rectangle(4, 6);
// $circle = new Circle(5, "Blue");

// echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// echo "Color of Circle: " . $circle->getColor() . "<br>";
// echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

// $car = new Car("Toyota");

// echo "Brand: " . $car->getBrand() . "<br>";

// echo "Model: " . $car->getModel() . "<br>";
// echo "Color: " . $car->getColor() . "<br>";

// $car->setColor("Red");

// echo "Updated Color: " . $car->getColor() . "<br>";
$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
?>