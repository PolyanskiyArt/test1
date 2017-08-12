<?php
if ($_SESSION['type']==77)
{
echo "<h2><center>Список неподтвержденных оплат студентов</center></h2>";
include ("./config/db_connect.php");
if ($_GET['oplata']<>'')
{
$query="UPDATE zakaz SET zakaz.oplachen=1,zakaz.status=5 where zakaz.id_zakaz=".$_GET['oplata'];
$result = mysql_query ($query) ;
if ($result)
echo "Заказ №".$_GET['oplata']." был успешно оплачен!";
else
echo "Заказ №".$_GET['oplata']." не подтвержден! Ошибка. Текст запроса: ".$query;
}

$query="select zakaz.* from zakaz where oplachen=0 LIMIT 30";
$result = mysql_query ($query) ;
echo "<table class='tbl' width='100%'><tr><th>№ заказа</th><th>Время окончания</th><th>Контакт</th><th>Цена</th><th>Подтверждение</th><th>Удалить</th></tr>";
while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{
$id_zakaz=$rows['id_zakaz'];
$need=$rows['need_finished'];
$cont=$rows['type_link'].":".$rows['txt_link'];
$summa=$rows['price'];
echo "<tr><td>".$id_zakaz."</td><td>".$need."</td><td>".$cont."</td><td>".$summa."</td><td><a href='index.php?link=list_oplata&oplata=".$id_zakaz."'>Подтвердить</a></td><td><a href='index.php?link=del_zakaz&nzakaz=".$id_zakaz."'>Удалить</td></tr>";
}
echo "</table>";
}

?>