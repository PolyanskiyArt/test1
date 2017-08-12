<?php
switch ($_SESSION['type'])
{
case 2:
include("./config/db_connect.php");
$id_avtor=$_SESSION['id'];
$query="SELECT a.id_user,a.schet, z.time_zapros, a.nkarta, a.nyandex, a.nqiwi FROM users a LEFT JOIN zp_zapros z ON a.id_user=z.id_client and z.gotovo=0 where a.id_user=".$id_avtor;
$result=mysql_query($query);
$rows = mysql_fetch_array($result);
$date = date('Y-m-d H:i:s');
$date_last=$rows['time_zapros'];
if ($date_last=='')
$mojno=8;
else
$mojno=$date-$date_last;

$schet=$rows['schet'];
$nkarta=$rows['nkarta'];
$nyandex=$rows['nyandex'];
$nqiwi=$rows['nqiwi'];

echo "<h2><center>Управление счетом</center></h2>";
echo "На данный момент состояние вашего счета: ".$schet." руб.<br>";
if ($mojno>7)
{
echo "Вы еще не запрашивали выплату со счета.";
echo "<form action='index.php?link=zakaz_zp' method='post'>";
echo "<select name='sposob'>";
echo "<option value='karta'>На карту №".$nkarta."</option>";
echo "<option value='yandex'>На яндекс-кошелек №".$nyandex."</option>";
echo "<option value='qiwi'>На яндекс-кошелек №".$nqiwi."</option>";
echo "</select>";
echo "<input type='submit' value='Заказать выплату'>";
echo "</form>";
}
else 
echo "В последний раз выплата со счета сайта была запрошена ".$mojno." дней назад";
break;
case 3:
include("./config/db_connect.php");
$id_partner=$_SESSION['id'];
$query="SELECT a.id_user,a.schet, z.time_zapros, a.nkarta, a.nyandex,a.nqiwi FROM users a LEFT JOIN zp_zapros z ON a.id_user=z.id_client and z.gotovo=0 where a.id_user=".$id_partner;
$result=mysql_query($query);
$rows = mysql_fetch_array($result);
$date = date('Y-m-d H:i:s');
$date_last=$rows['time_zapros'];
if ($date_last=='')
$mojno=1;
else
$mojno=$date-$date_last;
$schet=$rows['schet'];
$nkarta=$rows['nkarta'];
$nyandex=$rows['nyandex'];
$nqiwi=$rows['nqiwi'];

echo "<h2><center>Управление счетом</center></h2>";
echo "На данный момент состояние вашего счета: ".$schet." руб.<br>";
if ($mojno<7)
{
echo "Вы еще не запрашивали выплату со счета.";
echo "<form action='index.php?link=zakaz_zp' method='post'>";
echo "<select name='sposob'>";
echo "<option value='karta'>На карту №".$nkarta."</option>";
echo "<option value='yandex'>На яндекс-кошелек №".$nyandex."</option>";
echo "<option value='qiwi'>На яндекс-кошелек №".$nqiwi."</option>";
echo "</select>";
echo "<input type='submit' value='Заказать выплату'>";
echo "</form>";
}
else 
echo "В последний раз выплата со счета сайта была запрошена ".$mojno." дней назад";
break;

}
?>