<?php error_reporting(-1); 

if(isset($_POST['send'])){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
}

if(!empty($_GET)){
	echo '<pre>';
	print_r($_GET);
	echo '</pre>';
}	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<form method="post" action="">
	<p>
		<input type="text" name="name">
	</p>
	<P>
	<textarea name="text"></textarea>
	</P>
	<p>
		<input type="checkbox" name="remember">
	</p>
	<p>
		<select name="lang[]" multiple="">
			<option value="end">English</option>
			<option value="ru">Russian</option>
			<option value="jp">Japan</option>
		</select>
	</p>
	<p>
		<button type="submit" name="send" value="test"> Send </button>
	</p>
</form>

	<hr>

 	<a href="index.php?name=Pete&amp;test=123">Link</a>



	<p>Name: <?php if(!empty($_POST['name'])) echo $_POST['name']; else echo "form not send"; ?></p>
	<!-- <p>Введенный текст: <?php if(isset($_POST['text'])) echo nl2br($_POST['text']); else echo "form not send"; ?></p> -->
	<?php //условие ? да : нет ?>
	<p>Введенный текст: <?php echo !empty($_POST['text']) ?  nl2br($_POST['text']) :  "form not send" ?></p>

	<p>
		<?php if(isset($_POST['remember']) && $_POST['remember'] == 'on') echo "Отмечен"; ?>
	</p>


		

</body>
</html>