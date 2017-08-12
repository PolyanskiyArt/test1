<?php
if ($_SESSION['type']==77)
{
include("./config/db_connect.php");
if (!isset($_POST['cena']))
{
$nzakaz=$_GET['nzakaz'];
echo "<h2><center>Оценка заказа №".$nzakaz."</center></h2>";
$query="select * from zakaz where id_zakaz=".$nzakaz;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
echo "<table class='tbl' width='100%'><tr><th>№ заказа</th><th>Тип работы</th><th>Предмет</th><th>Тема</th><th>Страниц</th><th>Когда сдавать</th><th>Дополн</th><th>File</th><th>Price</th></tr>";
$nzakaz=$row['id_zakaz'];
switch ($row['type_work'])
{
case 1:
$type_work="Реферат";
break;
case 2:
$type_work="Контрольная";
break;
case 3:
$type_work="Курсовая";
break;
case 4:
$type_work="Дипломная";
break;
case 5:
$type_work="Бизнес-план";
break;
case 6:
$type_work="Другое";
break;
}
$v="От ".$row['v_ot']." до ".$row['v_do'];
$file_zadan=$row['file_zadan'];
$predmet=$row['predmet'];
$tema=$row['tema'];
$dop=$row['dop'];
$need_finished=$row['need_finished'];
echo "<tr><td>".$nzakaz."</td><td>".$type_work."</td><td>".$predmet."</td><td>".$tema."</td><td>".$v."</td><td>".$need_finished."</td><td>".$dop."</td><td><a href='".$file_zadan."'>Файл</a></td><td>";
echo "<form action='index.php?link=adm_ocenka&nzakaz=".$nzakaz."' method='post'>";
echo "<input name='cena' type='text'>";
echo "<input type='submit' name='submit' value='Оценить'>";
echo "</form>";

echo "</table>";

} else
{
$nzakaz=$_GET['nzakaz'];
 $cena=$_POST['cena'];
 echo "<h2><center>Заказ №".$nzakaz." оценен. Цена: ".$cena." руб.</center></h2><br>";
$query="UPDATE zakaz SET price=".$cena." where id_zakaz=".$nzakaz;
$result=mysql_query($query);
if ($result)
echo "В базе обновления прошли успешно.";
else echo "Что то прошло не так.";
echo "<br><a href='index.php?link=list_new_zakaz'>Вернуться в список новых заказов</a>";
}
}
?>