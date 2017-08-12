<?php
if ($_SESSION['type']==77)
{
include("./config/db_connect.php");
$nzakaz=$_GET['nzakaz'];
$query="delete from zakaz where id_zakaz=".$nzakaz;
$result=mysql_query($query);
if ($result)
{
echo "Заказ номер ".$nzakaz." успешно удален из базы";
}
else
{
echo "Заказ номер ".$nzakaz." не удален из базы<br>";
echo $query;
}

}