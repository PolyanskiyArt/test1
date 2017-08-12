<?php
if ($_SESSION['type']==77)
{
include ("./config/db_connect.php");

$nzakaz=$_GET['nzakaz'];
echo "<h2><center>Выбор автора </center></h2>";
if (($avtor=$_GET['avtor']))
{
$time = date('Y-m-d H:i:s');
$query="update zakaz set id_avtor=".$avtor.", status=3 ,time_vibor='".$time."' where id_zakaz=".$nzakaz;
//echo "query=".$query;
$result = mysql_query($query);
$query="delete from ocenka where id_zakaz=".$nzakaz." AND id_avtor<>".$avtor;
$result2 = mysql_query($query);
if ($result and result1)
{
echo "Автор для заказа №".$nzakaz." выбран. Вам необходимо как можно быстрее оплатить сумму, чтобы выбранный автор приступил к работе. Оплату можно осуществить одним из способов:";

}
else echo "Что то пошло не так";
}
else {
$query="select z.oplachen,z.price,z.need_finished, z.id_zakaz,o.*,u.id_user,u.nick_name,u.reyting,u.cont_spec,o.price_all,u.linking,u.cont_icq,u.cont_vk,u.cont_odn,u.cont_skype from zakaz z,ocenka o, users u where z.id_avtor=0 and  o.id_zakaz=z.id_zakaz and u.id_user=o.id_avtor ORDER BY z.need_finished LIMIT 30";
echo $query;
$result = mysql_query($query);
echo "<table width='100%'><tr><th>Заказ</th><th>Оплачен</th><th>Срок</th><th>Автор</th><th>Рейтинг</th><th>Связь</th><th>Цена, руб.</th><th>Цена автора</th><th>Выбрать</th></tr>";
while ($rows = mysql_fetch_array($result))
{
if ($rows['oplachen']=='0')
$oplat="Нет";
else
$oplat="Да";

switch($rows['linking'])
{
case '1':
$link="i: ".$rows['cont_icq'];
break;
case '2':
$link="v: ".$rows['cont_vk'];
break;
case '3':
$link="o ".$rows['cont_odn'];
break;
case '4':
$link="s ".$rows['cont_skype'];
break;
}
	$avtor=$rows['id_avtor'];
	$nzakaz = $rows['id_zakaz'];
	$need = $rows['need_finished'];
	$nick = $rows['nick_name'];
	$reyting = $rows['reyting'];
	$cont_spec = $rows['cont_spec'];
	$price_avtor = $rows['price_avtor'];
	$price=$rows['price'];
	echo "<tr><td>".$nzakaz."</td><td>".$oplat."</td><td>".$need."</td><td>".$nick."</td><td>".$reyting."</td><td>".$link."</td><td>".$price."</td><td>".$price_avtor."</td><td><a href='index.php?link=vibor_avtora&nzakaz=".$nzakaz."&avtor=".$avtor."'>Выбрать</td></tr>";
}
echo "</table>";
}
}
?>