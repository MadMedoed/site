<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!-- <?php require 'inc.php' ?> -->

<?php

$nums = [1,2,3];
$names = ['Ivanov','Petrov'];
$names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
/*
echo count($nums);
echo count($names);*/

require_once 'funcs.php';


/*$x = 100;
$y = 10;


sum(5,7);
sum(10,3);
sum(5,4);
sum($x, $y);

sum();*/

/*$a = 5;
$b = 10;
echo $a;
echo "<br>";
sum($a,$b);
echo $a;*/

/*$rez = sum(1,2);
echo $rez;*/


/*$keys = array_keys($nums);
print_r($keys);

$keys2 = my_array_keys($nums);
print_r($keys2);

$keys3 = my_array_keys($names2);
print_r($keys3);*/


$value = my_count($names2);
echo "<pre>";
print_r($value);
echo "</pre>";

echo count($names) ;
?>



</body>
</html>