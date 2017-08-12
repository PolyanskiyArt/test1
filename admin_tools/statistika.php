<?php
if ($_SESSION['type']==77)
{
echo "<center><h2>Статистика уникальных посещений</h2></center>";
include ("./config/db_connect.php");
$query="select count(ip) as count, date from uniquehits group by date ORDER BY date DESC LIMIT 30";
$result=mysql_query($query);
echo "<table width='100%'><tr><th>Дата</th><th>Count</th></tr> ";
while ($rows = mysql_fetch_array($result))
{
echo "<tr><td>".$rows['date']."</td><td>".$rows['count']."</td></tr>";
}
echo "</table>";

echo "<h2><center>Список исполненных заказов</center></h2>";
echo "<table width='100%'><tr><th>Дата</th><th>Номер заказа</th><th>Сумма автору</th><th>Сумма партнеру</th><th>Общая сумма</th></tr>";
$query="select DATE_FORMAT(z.time_finished,'%Y-%m-%d') as time, z.id_zakaz, s.id_partner, o.price_partner,o.price_avtor,o.price_all from zakaz z, users s, ocenka o where z.id_student=s.id_user and z.status=10 and o.id_zakaz=z.id_zakaz LIMIT 30";
$sql = mysql_query($query);
if ($sql)
while ($rows = mysql_fetch_array($sql)) // каждое поле строки присваиваем переменной 
{ 
$time=$rows['time'];
$id_zakaz=$rows['id_zakaz'];
$price_partner=$rows['price_partner'];
$price_avtor=$rows['price_avtor'];
$price_all=$rows['price_all'];
echo "<tr><td>".$time."</td><td>".$id_zakaz."</td><td>".$price_avtor."</td><td>".$price_partner."</td><td>".$price_all."</td></tr>";
}
echo "</table>";

}

?>
