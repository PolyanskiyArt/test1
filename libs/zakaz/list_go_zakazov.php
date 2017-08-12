<h2><center>Список занятых заказов</center></h2>
<?php
include ("/config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$table = "zakaz";
$result = mysql_query ("SELECT * FROM ".$table." WHERE status>1 ORDER BY need_finished LIMIT 30"); // Выбор строк с 0-ой по 35-ую с сортировкой по полю test _1 
$num_rows=mysql_num_rows($result);

echo "<table width='100%'>";
echo "<tr><th>№";
//echo "</th><th>Время заказа";
echo "</th><th>Тип работы";
echo "</th><th>Предмет";
echo "</th><th>Тема";
echo "</th><th>Объем от";
echo "</th><th>Объем до";
echo "</th><th>Нужно закончить";
echo "</th><th>Приложение";
echo "</th><th>Дополнительная информация";
echo "</th></tr>";

while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{ 
// В этом цикле осуществляем какие-либо операции с переменными $ test _1 и $ test _2 // 
// К примеру, просто выводим их 
include ('./libs/functions/zakaz_status.php');
$id_zakaz=$rows['id_zakaz'];
$type_work=f_type_work($rows['type_work']);
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$v_ot=$rows['v_ot'];
$v_do=$rows['v_do'];
$need_finished=$rows['need_finished'];
$file_zadan=$rows['file_zadan'];
$dop=$rows['dop'];
$time_zakaz=$rows['time_zakaz'];
echo "<tr><td>".$id_zakaz;
//echo "</td><td>".$time_zakaz;
echo "</td><td>".$type_work;
echo "</td><td>".$predmet;
echo "</td><td>".$tema;
echo "</td><td>".$v_ot;
echo "</td><td>".$v_do;
echo "</td><td>".$need_finished;
echo "</td><td><a href='".$file_zadan."'>Приложенный файл</a>";
echo "</td><td>".$dop;
echo "</td></tr>";
}
echo "</table>";
?>
