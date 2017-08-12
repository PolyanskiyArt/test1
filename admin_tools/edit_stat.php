<?php
if ($_SESSION['type']==77)
{
if ($id_stat=$_GET['edit'])
{
    include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
  echo "Редактирование статьи номер ".$id_stat;
  $query="select * from stat where id_stat=".$id_stat;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
echo "<form action='index.php?link=editcat&save=".$id_stat."' method='post'>";
echo "<table><tr><td>Заголовок</td><td>";
echo "<input type='text' name='head' value='".$row['head']."'></td></tr>";
echo "<tr><td>Статья кратко:</td><td>";
echo "<textarea name='short' value='".$row['short']."' rows='3' cols='100'></td></tr>";
echo "<tr><td>Вся статья:</td><td>";
echo "<textarea name='poln' value='".$row['poln']."' rows='40' cols='100'></td></tr>";
echo "<tr><td><button type='reset' value='Отменить изменения'></td><td>";
echo "<button type='submit' value='Сохранить изменения'></td></tr>";
echo "</table>";

}
else
{
    if ($_GET['nstat'])
	{
	$nstat=$_GET['nstat'];
	$query="SELECT head,poln as txt, date FROM stat WHERE id_stat=".$nstat;
	}
	else
	{
	$nstat=0;
	$start=0;
	$finish=10;
	if ($_GET['page'])
	{
	$page=htmlspecialchars(stripslashes($_GET['page']));
	$start=$start+10*$page;
	$finish=$finish*$page;
	}
	$query="SELECT id_stat, head,short as txt, date FROM stat ORDER BY date DESC LIMIT ".$start.", ".$finish;
	}
    include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query($query);
    if ($nstat==0)
	echo "<center><h2>Редактор статей</h2></center>";
    echo "<table class='table-stat' width='100%'>";
    while ($row = mysql_fetch_array($result))
	{
	$id_stat=$row['id_stat'];
	$head=$row['head'];
	$txt=$row['txt'];
	$head=$row['head'];
	$date=$row['date'];
	echo "<tr><td><h3><a href='index.php?link=catstat&nstat=".$id_stat."' align='right'>".$head."</a></h3></td></tr><tr><td>";
	echo "<tr><td>".$txt."</td></tr><tr><td>";
	echo "<i>Дата публикации: ".$date."</i>";
	if ($nstat==0)
	echo "<p align='right'><a href='index.php?link=editstat&nstat=".$id_stat."' align='right'>Читать полностью</a></p>";
	echo "<p align='right'><a href='index.php?link=editstat&edit=".$id_stat."' align='right'>Редактировать</a></p>";
	echo "</td></tr>";
	}
	echo "</table>";
}
}

?>