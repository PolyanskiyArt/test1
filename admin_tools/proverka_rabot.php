<?php
if ($_SESSION['type']==77)
{
echo "<h2><center>Список непроверенных работ</center></h2>";
include ("./config/db_connect.php");
if ($_GET['nzakaz']<>'')
if ($_GET['how']=='good')
{
$id_zakaz=$_GET['nzakaz'];
$query="SELECT u1.reyting,u2.schet as pschet, u1.schet as aschet,z.id_avtor,z.id_partner as id_partner,o.price_avtor,o.price_partner FROM users u1,zakaz z, ocenka o LEFT JOIN users u2 ON u2.id_user=id_partner WHERE u1.id_user=z.id_avtor and z.id_zakaz=".$id_zakaz." and o.id_zakaz=z.id_zakaz";
echo $query;
$result = mysql_query ($query) ;
$rows = mysql_fetch_array($result);
$id_avtor=$rows['id_avtor'];
$id_partner=$rows['id_partner'];
$price_avtor=$rows['price_avtor'];
$price_partner=$rows['price_partner'];
$aschet=$rows['aschet'];
$pschet=$rows['pschet'];
echo "<br>Автор: <a href='index.php?link=profile&id_user=".$id_avtor."'>".$id_avtor."</a>";
echo "<br>Автор счет: ".$aschet;
echo "<br>Сумма автору: ".$rows['price_avtor'];
if ($rows['id_partner']>0)
{
echo "<br>Сумма партнеру: ".$rows['price_partner'];
echo "<br>Партнер: <a href='index.php?link=profile&id_user=".$id_partner."'>".$rows['id_partner']."</a>";
echo "<br>Партнер счет: ".$pschet;
}
$reyting=$rows['reyting']+1;
$aschet=$aschet+$price_avtor;
$query="update zakaz set status=10 where id_zakaz=".$id_zakaz;
$result = mysql_query ($query) ;
$query="update users set reyting=".$reyting.",schet=".$aschet." where id_user=".$id_avtor;
$result = mysql_query ($query) ;
if ($id_partner<>0)
{
$pschet=$pschet+$rows['price_partner'];
$query="update users set schet=".$pschet." where id_user=".$id_partner;
$result = mysql_query ($query) ;
}
}

$query="select * from zakaz where oplachen=1 and file_otvet<>'' and status<10";
echo $query;
$result = mysql_query ($query) ;
echo "<table width='100%'><tr><th>№ заказа</th><th>Студент</th><th>Предмет</th><th>Тема</th><th>Требования</th><th>Файл задания</th><th>Готовая работа</th><th>Все хорошо</th><th>Работа плохая</th></tr>";

while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{
$id_zakaz=$rows['id_zakaz'];
switch($rows['type_link'])
{
case 1:
$id_student="V: ".$rows['txt_link'];
break;
case 2:
$id_student="I: ".$rows['txt_link'];
break;
case 3:
$id_student="S: ".$rows['txt_link'];
break;
case 4:
$id_student="O: ".$rows['txt_link'];
break;
case 5:
$id_student="M: ".$rows['txt_link'];
break;
}
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$dop=$rows['dop'];
$file_zadan=$rows['file_zadan'];
$file_otvet=$rows['file_otvet'];
$gotovo="<a href='index.php?link=proverka_rabot&nzakaz=".$id_zakaz."&how=good'>Все хорошо</a>";
$poor="<a href='index.php?link=proverka_rabot&nzakaz=".$id_zakaz."&how=poor'>Плохо</a>";
echo "<tr><td>".$id_zakaz."</td><td><a href='index.php?link=profile&id_user=".$id_student."'>".$id_student."</a></td><td>".$predmet."</td><td>".$tema."</td><td>".$dop."</td><td><a href='".$file_zadan."'>Файл</a></td><td><a href='".$file_otvet."'>Файл</a></td><td>".$gotovo."</td></tr>";
}
echo "</table>";
}




