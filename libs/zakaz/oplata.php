<?php
$nzakaz=$_GET['nzakaz'];
echo "<h2><center>Оплата заказа №".$nzakaz."</center></h2>";
$id_student=$_SESION['id'];
include("./config/db_connect.php");
$query="select z.*,o.price_all from zakaz z, ocenka o where o.id_zakaz=".$nzakaz." and z.id_zakaz=".$nzakaz;
$result = mysql_query ($query);
$rows = mysql_fetch_array($result,MYSQL_ASSOC);
echo "Сумма к уплате: ".$rows['price_all']." руб.";
echo "<table><tr><th>Выберите способ оплаты</th><th>Введите сумму оплаты</th><th>Время оплаты</th><th>Фото чека</th></tr>";
echo "<form enctype='multipart/form-data' action='index.php?link=obr_oplata&nzakaz=".$nzakaz."' method='post'>";
echo "<tr><td><select name='type_oplata'>";
echo "<option disabled>Выберите способ оплаты</option>";
echo "<option value='1'>Карта сбербанка</option>";
echo "<option value='2'>Яндекс-кошелек</option>";
echo "<option value='3'>QIWI-кошелек</option>";
echo "</select></td>";
echo "<td><input type='text' name='summa_oplata'></td>";
echo "<td><input type='text' name='time_oplata'></td><input type='hidden' name='MAX_FILE_SIZE' value='30000000' />";
echo "<td><input name='userfile' type='file'size='41' /></td>";
echo "<td><input type='submit'></td></tr>";
echo "</form></table>";
?>
