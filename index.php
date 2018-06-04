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

if(!empty($_FILES)){
	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';
	move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'. $_FILES['file']['name']);

}


/*	echo '<pre>';
	print_r($_SERVER['HTTP_USER_AGENT']);
	echo '</pre>';*/

/*echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['QUERY_STRING'];*/
//echo $_SERVER['HTTP_REFERER'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



<form method="post" action="" enctype="multipart/form-data">
	<p>
		<input type="text" name="name">
	</p>
	<P>
	<textarea name="text"></textarea>
	</P>
	<p>
		<input type="file" name="file">
	</p>
	<p>
		<button type="submit" name="send" value="test"> Send </button>
	</p>
</form>

	<hr>




		

</body>
</html>