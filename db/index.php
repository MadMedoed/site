<?php 
error_reporting(-1); 


function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}




$db = @mysqli_connect('127.0.0.1', 'root', '', 'gb') or die('Ошибка соединения с БД') ;
if (!$db) die (mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die ('Не установлена кодировка');


// $insert = "INSERT INTO `gb` (name, text) VALUES ('Оля', 'Text oli')";

// $res_insert = mysqli_query($db, $insert);

// if($res_insert) echo "OK";
//  else echo 'Error';

// //echo mysqli_error($db);

/*$update = "UPDATE gb SET text = CONCAT(text, '|||') WHERE id > 4";
$res_update = mysqli_query($db, $update) or die(mysqli_error($db));
*/

/*$delete = "DELETE FROM gb WHERE id > 4";
$res_delete = mysqli_query($db, $delete); 

echo mysqli_affected_rows($db); */
$str = "d'Artanian";
$str = mysqli_real_escape_string($db, $str);
$query = "INSERT INTO `gb` (name, text) VALUES ('$str', 'Имя с апострофом')";
mysqli_query($db,$query) or die(mysqli_error($db));


$res = mysqli_query($db, "SELECT id, name, text, date FROM gb ORDER BY id DESC");
//echo mysqli_num_rows($res);
$date = mysqli_fetch_all($res, MYSQLI_ASSOC);
/*$date2 = [];
while ($row = mysqli_fetch_assoc($res)) {
	$date2[$row['id']] = $row;
}*/
// print_arr($date2);

foreach ($date as $item) {
	echo "NAME: {$item['name']} <br>";
	echo "TEXT: {$item['text']} <br>";
	echo "DATE: {$item['date']} <br>";
	echo "<hr>";
}

?>

