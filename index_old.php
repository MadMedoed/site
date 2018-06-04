<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php



/*$light = 'green';

if ( $light == 'green'  ) {
 echo "go";
}

*/

/*$i = 1;

while ($i < 100) {
	echo "<pre>";
	echo $i;
	echo "<pre>";
	$i++;
}*/


/*$i = 1;
echo "<table border='1' >" . "\n";
while ($i <= 10) {
	echo "\t <tr> \n";
    $n = 1;
	while ($n <= 3) {
		echo "\t \t <td>Row $i | Col - $n </td> \n";
		$n++;
	}
	echo "\t </tr> \n";
	$i++;
}
echo "</table>";
*/

/*$year = 1900;

echo '<select>' . "\n";
while ($year <= 2018) {
	echo " \t <option value='$year'>$year</option> \n";
	$year++;
}
echo '<select>';*/

/*$i = 1;

while ($i <= 10) {
	
	echo $i++ . '<br>';
}	*/

/*$i = 11;
do{
	echo $i++ . '<br>';
}while($i <= 10)	
*/

/*$i = 1;
echo "<table border='1' >" . "\n";
while ($i < 10) {
	echo "\t <tr> \n";
    $n = 1;
	while ($n <= 9) {
		echo "\t \t <td> $n * $i =" . $n*$i . "</td>  \n";
		$n++;
	}
	echo "\t </tr> \n";
	$i++;
}
echo "</table>";*/


/*$arr = array('Ivan','Petr','Sydr' );

// var_dump($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr[1];

$arr2 = [
	1,
	['ban','ora','app'],
	'cat',
	4,
	5
];

echo "<pre>";
print_r($arr2);
echo "</pre>";


echo $arr2[1][2];*/

/*$arr3 = [
	2 => 'Ivan', 
	4 => 'Petr', 
	10 => 'Sydr'];

echo "<pre>";
print_r($arr3);
echo "</pre>";

echo $arr3[4];*/

/*
$goods = [
    [
		'title' => 'Nokia',
		'price' => 100,
		'desc' => 'Описание'
    ],
     [
		'title' => 'Ipad',
		'price' => 20,
		'desc' => 'Описание'
    ],

];*/

/*echo "<pre>";
print_r($goods);
echo "</pre>";


echo $goods[0]['title'] .'-'. $goods[0]['price'];
echo "<br>";
echo $goods[1]['title'] .'-'. $goods[1]['price'];*/

/*$x = 0;
while ($x <= 1) {
	echo "<pre>";
	echo $goods[$x]['title'] .'-'. $goods[$x]['price'];
	echo "</pre>";
	$x++;
}*/

// echo count($goods, 1);



/*for ($i=0; $i < 10 ; $i++) { 
	echo $i . "<br>";
}*/



$arr = array('Ivan','Petr','Sydr' );

// for ($i=0; $i < count($arr); $i++) { 
// 	echo $arr[$i] . "<br>";
// }

$names = [
  'Ivan' => 'Ivanov',
  'Petr' => 'Petorv',
  'Sydr' => 'Sydorov'
];

// print_r($names);


/*echo '<select>' . "\n";
for ($year=1900; $year<=2018; $year++) { 
	echo " \t <option value='$year'>$year</option> \n";
}
echo '<select>';


echo "<table border='1' >" . "\n";
for ($i=1; $i < 10 ; $i++) { 
	echo "\t <tr> \n";
		for ($n=0; $n < 10 ; $n++) { 
			echo "\t \t <td> $n * $i =" . $n*$i . "</td>  \n";
		}
	echo "\t </tr> \n";	
}
echo "</table>";*/

/*foreach ($names as $name) {
	echo $name . '<br>';
}

foreach ($names as $key => $name) {
	echo "Name: $key , Fam : $name <br>";
}
*/

/*foreach ($arr as $k => $v) {
	echo "key: $k - Name: $v <br>";
}*/

/*$a = 5;
if ($a > 3 OR $a < 7) {
	echo "ok";
}else{
	echo "no";
}*/

/*for ($i=0; $i <=30 ; $i++) { 
	echo $i . "<br>";
	if ($i == 10) {
		echo "<H3>found!</H3>";
		break;
	}
}*/

/*for ($i=0; $i <=30 ; $i++) { 
	if ($i >= 10 AND $i <=20 ) continue;
	echo $i . "<br>";
}*/

/*foreach ($names as $key => $value) {
	if ($key == 'Petr')  continue;
	echo "$key - $value <br>";
}*/


/*$var = 2;
switch ($var) {
	case 1:
		echo "var = 1";
		break;
	case 2:
		echo "var = 2";
		break;
	case 3:
		echo "var = 3";
		break;		
	default:
		echo "Something";
		break;
}*/

$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;

/*if ($bool) {
	echo '<table class="table" border = "1">
			<tr>
				<td>' . $str1 . '<td>
				<td>' . $str2 . '<td>
				<td>' . $str3 . '<td>
			</tr>
		 </table>';

}*/



?>


<!-- <?php if($bool): ?>

		<table class="table" border = "1">
			<tr>
				<td><?php echo $str1 ?></td>
				<td><?php echo $str2 ?></td>
				<td><?php echo $str3 ?></td>
			</tr>
		 </table>

<?php endif; ?>	 -->

<?php foreach ($names as $key => $name) : ?>
	Name: <?php echo $key ?> , Fam : <?php echo  $name ?>  <br>

<?php endforeach;  ?>




</body>
</html>