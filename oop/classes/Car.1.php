<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function __construct($color, $wheels, $speed, $brand)
    {
       $this->$color = $color;
       $this->$wheels = $wheels;
       $this->$speed = $speed ;
       $this->$brand = $brand;
       
    }

   /*  public function getLorem(){
        ?>
        <div>Hello, World!</div>
        <?php
    } */

    public function __destruct()
    {
        var_dump($this);
    }


    public function getCarInfo(){
        return "<h3>О авто:</h3>
        Марка:{$this->brand} <br>
        Цвет:{$this->color} <br>
        Кол-во колес:{$this->wheels} <br>
        Скорость:{$this->speed} <br>";
    }





//c версии 5.6
    public $path = __DIR__ . '\test';
    public $test = 1 + 2;

}