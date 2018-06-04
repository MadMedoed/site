<?php
//header('Conent-Type: text/html; charset=utf-8');
//header('Location: incl.php');
//header('refresh: 5; url=incl.php');
//exit;
//die ;
//header('HTTP/1.0 304 Not Modified');
require_once 'incl.php';
header('Content-Type: text/plain; charset=utf-8');
//header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('text.txt');
die;
?>

<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

		<?=$test?>
		привет, мир!!!!!

</body>
</html>