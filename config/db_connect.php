<?php
/* 
$site="http://umstudenta.ru/index.php";
$host="localhost"; // у большинства хостеров этот параметр именно такой 
$user="kate"; //ваше имя для подключения к MySQL 
$pass="iol.,mjui"; // Ваш пароль для подключения к MySQL 
$db_name="mk"; // Имя создаваемой базы данных 
$db_link = mysql_connect($host, $user, $pass) // Соединение с MySQL 
   or die ("Невозможно подключиться к MySQL");
mysql_select_db ($db_name) // Выбор Базы данных 
   or die ("Невозможно выбрать БД ");
*/
$site="http://umstudenta.ru/index.php";
$host="localhost"; // у большинства хостеров этот параметр именно такой 
$user="root"; //ваше имя для подключения к MySQL 
$pass=""; // Ваш пароль для подключения к MySQL 
$db_name="umstuden_db_stud"; // Имя создаваемой базы данных 
$db_link = mysql_connect($host, $user, $pass) // Соединение с MySQL 
   or die ("Невозможно подключиться к MySQL");
mysql_select_db ($db_name) // Выбор Базы данных 
   or die ("Невозможно выбрать БД ");

?>
