<?php
if (($_SESSION['type']==2 OR $_SESSION['type']==3))
{
 include ("./config/db_connect.php");
echo "<h2><center>Список выплат</center><h2>";
$query="select * from zp_zapros where id_client=".$_SESSION['id']." order by time_zapros desc limit 30";
$result=mysql_query($query);
echo "<table class='tbl' width='100%'><tr><th>Номер запроса</th><th>Дата</th><th>Статус</th><th>Сумма</th></tr>";
while ($rows = mysql_fetch_array($result))
{
if ($rows['gotovo']=='')
$status='Запрос в обработке';
else
$status="Запрос исполнен ".$rows['gotovo'];
$id_zapros=$rows['id_zapros'];
$time_zapros=$rows['time_zapros'];
$summa=$rows['summa'];
echo "<tr><td>".$id_zapros."</td><td>".$time_zapros."</td><td>".$status."</td><td>".$status."</td></tr>";
}
echo "</table>";
}

?>