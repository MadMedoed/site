<?php
error_reporting(-1);
require_once 'classes/Car.php';

$car1 = new Car();
$car2 = new Car();

function debug($data) {
    echo '<pre>'. print_r($data, 1) .'</pre>';
}


//debug($car1);

$car1->color = 'черный';
$car1->brand = 'volvo';
$car1->year = '2018';
$car1->colour = 'red';

$car2->color = 'white';
$car2->brand = 'bmw';
$car2->speed = '200';
$car2->year = '2017';

//debug($car1);
//debug($car2);

echo "<h3>О авто:</h3>
Марка:{$car1->brand} <br>
Цвет:{$car1->color} <br>
Кол-во колес:{$car1->wheeles} <br>
Год: {$car1->year}<br>
Скорость:{$car1->speed} <br>";

