﻿<?php
if ($_SESSION['type']==77)
{
include ("./config/db_connect.php");
if ($_GET['nzapros'])
{
$date = date('Y-m-d H:i:s');
$query="update zp_zapros set summa=".$_POST['zp_summ'].", gotovo='".$date."' where id_zapros=".$_GET['nzapros'];
echo $query."<br>";
$result1=mysql_query($query);
$query="update users set schet=schet-".$_POST['zp_summ']." where id_user=".$_GET['navtor'];
echo $query."<br>";
$result2=mysql_query($query);
if ($result1 and $result2)
echo "Запрос №".$_GET['nzapros']." обработан. Со счета автора".$_GET['navtor']." списано ".$_POST['zp_summ']." руб.";
else "Запрос не обработан. Что то пошло не так. Смотри zp_avtor";

}
echo "<h2><center>Список запросов зп авторов</center></h2>";
$query="select z.*,a.nkarta,a.nyandex,a.schet,a.id_user from zp_zapros z,users a where gotovo=0 and type_client=2 and z.id_client=a.id_user";
echo $query;
$result = mysql_query ($query);
echo "<table width='100%'><tr><th>№ запроса</th><th>Время запроса</th><th>Способ</th><th>Реквизиты</th><th>Сумма</th><th>Оплачено</th></tr>";
while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{
$id_zapros=$rows['id_zapros'];
$time_zapros=$rows['time_zapros'];
$summa=$rows['summa'];
$id_avtor=$rows['id_user'];
if ($rows['sposob']==1)
{
$sposob="Карта";
$rekv=$rows['nkarta'];
}
else
{
$rekv=$rows['nyandex'];
$sposob="Яндекс";
}
if ($rows['sposob']==1)
$sposob='Карта';
else
$sposob='Yandex';
$schet=$rows['schet'];

$price_all=$rows['price_all'];
echo "<tr><td>".$id_zapros."</td><td>".$time_zapros."</td><td>".$sposob."</td><td>".$rekv."</td><td>".$schet."</td><td>";
echo "<form action='index?link=zp_avtor&nzapros=".$id_zapros."&navtor=".$id_avtor."' method='post'>";
echo "<input type='text' name='zp_summ'>";
echo "<input type='submit' value='Оплачено'>";
echo "</form></td></tr>";
}
echo "</table>";
}

?>
