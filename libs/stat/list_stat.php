<?php
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
	echo "<center><h2>Каталог статей</h2></center>";
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
	echo "<p align='right'><a href='index.php?link=catstat&nstat=".$id_stat."' align='right'>Читать полностью</a></p>";
	echo "</td></tr>";
	}
	echo "</table>";

?>