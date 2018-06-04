<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php


/*echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set('Europe/Kiev');
echo "<br>";
echo date_default_timezone_get();*/

//echo date('Y-m-d H:i', time() + 60*60*24*10);
//echo '2010 - '. date('Y');


/*$date = getdate();
echo "<pre>";
print_r($date);
echo "<pre>";

echo $date['year'];*/

//echo date('Y-m-d H:i', strtotime('+1 day 2 hours'));

/*
echo time();
echo "<br>";
echo mktime(date("H"),date("i")+1,date("s"),date("m")+1,date("d"),date("Y"));*/

// $t = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y")+1);
// echo date('Y-m-d H:i', $t) ;


/*$date = date_create(date('Y-m-d H:i'));
//print_r($date);

echo date_format($date,'Y-m-d H:i');
date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds'));
echo "<br>";	
echo date_format($date,'Y-m-d H:i');*/

/*echo time();
echo "<br>";
echo microtime();*/

//var_dump( microtime(true));


$start = microtime(true);
//usleep(1000000);

for ($i=1; $i <= 1000000000 ; $i++) { 
	if ($i == 1000000000) echo "<p>Over</p>";
}

$end = microtime(true);
echo $end - $start;










?>

		

</body>
</html>