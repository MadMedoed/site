<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

/*$str = 'Иванов Иван Иванович';

$data = explode(' ', $str);

//echo $data[2];
print_r($data);*/

/*$data = ['Иванов','Иван','Иванович'];
echo $str = implode(' | ', $data);*/


// $str = "\n<p>Hello</p>\n";
// $str .= "\n<p>World</p>\t\n";
// //echo $str;
// echo trim($str, "\t");

/*
$str = '.......test,';
echo trim($str, ',');*/

/*$str = 'password';

echo md5(md5($str));*/

/*$str = "Hello\n world\n";
echo nl2br($str);*/

/*
$str = '[i]Привет[/i]! Меня зовут [B]Миша[/b]';
// $str = str_replace("[b]", '<b>', $str);
// $str = str_replace("[/b]", '</b>', $str);
$search = ['[i]', '[/i]', '[b]', '[/b]'];
$replace = ['<i>', '</i>', '<b>', '</b>'];
// $str = str_replace($search, $replace, $str);
$str = str_ireplace($search, $replace, $str);

echo $str;*/

/*$str = '<i>Привет</i>! Меня зовут <b>Миша</b> <script>alert("XSS")</script>';

echo strip_tags($str,'<b> <i>');*/

/*$str = 'привет!';

echo mb_strlen($str, 'utf-8');*/


// $str = 'Привет, мир!';
// //echo mb_strpos($str, "и", 3, 'utf-8');

// if (mb_strpos($str, "П", 0, 'utf-8') !== false) echo "Ok";
// else echo "NO";

/*$str = 'привет. мир!';
$str2 = "ПРИЕТ. МИР!";

echo mb_strtoupper($str, 'utf-8');
echo mb_strtolower($str2, 'utf-8');*/


/*$str = 'Привет, мир!';
//echo mb_substr($str, 0, 6, 'utf-8');
echo mb_substr($str, -4, 3, 'utf-8');*/


/*$str = '<h1><i>Привет</i>! Меня зовут <b>Миша</b>!</h1>
<iframe src="http://revent-rp.ru" height="50%" width="50%"></iframe>';
echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);*/

/*$str = '&lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;! Меня зовут &lt;b&gt;Миша&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot;http://revent-rp.ru&quot;
height=&quot;50%&quot; width=&quot;50%&quot;&gt;&lt;/iframe&gt;';

echo htmlspecialchars_decode($str);*/







?>

		

</body>
</html>