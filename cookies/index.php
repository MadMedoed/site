<?php 


/*
//setcookie('test','My value', time());
setcookie('test','',time() - 3600*24);

echo $_COOKIE['test'];

//echo date('H:i', time());

//куки созд для текущей директории и вложенных, в папках выше не будет работать
//нужен параметр path*/


isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/') : setcookie('counter', 1, time()+3600, '/');


echo isset($_COOKIE['counter']) ?  $_COOKIE['counter'] : 1;