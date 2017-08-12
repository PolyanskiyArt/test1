<?php
echo "<h2><center>Список моих заказов</center></h2>";
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$query="select * from zakaz where status<>10 and id_avtor=".$_SESSION['id'];
//echo $query;
$result = mysql_query($query);
if ($result)
{
echo "<table class='tbl' width='100%'><tr><th>№ заказа</th><th>Тип работы</th><th>Предмет</th><th>Тема</th><th>Статус</th><th>Готовая работа</th></tr>";
include ("./libs/functions/zakaz_status.php");
while ($rows = mysql_fetch_array($result))
{
$nzakaz=$rows['id_zakaz'];
$type_work=f_type_work($rows['type_work']);
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$status=status($rows['status'], $nzakaz,'');
if ($rows['file_otvet']=='')
$got="<a href='index.php?link=file_otvet&nzakaz=".$nzakaz."'>Приложить готовую работу</a>";
else
$got="Работа готова. <a href='index.php?link=file_otvet&nzakaz=".$nzakaz."'>Заменить</a>";
echo "<tr><td>".$nzakaz."</td><td>".$type_work."</td><td>".$predmet."</td><td>".$tema."</td><td>".$status."</td><td>".$got."</td></tr>";

}
echo "</table>";
}
?>
