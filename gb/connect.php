<?php 

$db = @mysqli_connect('127.0.0.1', 'root', '', 'gb') or die('Ошибка соединения с БД') ;
if (!$db) die (mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die ('Не установлена кодировка');