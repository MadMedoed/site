<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<form method="post" action="" >
	<p>
		<input type="text" name="name">
	</p>
	<P>
	<textarea name="text"></textarea>
	</P>
	
	<p>
		<button type="submit" name="send" value="test"> Send </button>
	</p>
</form>


<?php
/*
if(isset($_POST['send'])){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
}
*/

$file = $_POST['send'];

file_put_contents('db.txt', $file, FILE_APPEND);

echo "<hr>";

echo $file = file_get_contents('db.txt');
/*
$file2 = file_get_contents('http://php.net/manual/ru/control-structures.foreach.php');
file_put_contents('folder/file.txt', $file, FILE_APPEND);
*/
?>



		

</body>
</html>