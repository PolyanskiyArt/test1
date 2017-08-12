<?php
$n_zakaz=$_GET['nzakaz'];
$price_avtor=htmlspecialchars(stripslashes($_POST['price_avtor']));
$price_all=ceil($price_avtor*1.2/50)*50;
$price_partner=floor($price_all*0.08);

$date = date('Y-m-d H:i:s');
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$q="INSERT INTO ocenka (id_zakaz,id_avtor,time_ocenka,price_avtor,price_all,price_partner) VALUES(".$n_zakaz.",".$_SESSION['id'].",'".$date."',".$price_avtor.",".$price_all.",".$price_partner.")";
//echo $q."<br>";
$result2 = mysql_query ($q);
$q="UPDATE zakaz SET status=1 where id_zakaz=".$n_zakaz;
$result1 = mysql_query ($q);
$q="insert into messages (txt_vid,type_client,id_zakaz) VALUES (1,1,".$n_zakaz.")";
$result = mysql_query ($q);
//echo "1";
if ($result2==TRUE and $result1==true)
{
echo "Ваша оценка принята. Спасибо";
echo "<a href='index?link=list_zakazov'>Перейти в список свободных заказов</a>";
}
else
{
echo "Ваша оценка не принята. Возникла ошибка. Просьба обратиться к нашей службе поддержки";
}

?>