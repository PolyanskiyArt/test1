<?php
include ("./config/db_connect.php");
$nzakaz=$_GET['nzakaz'];
echo "<h2><center>Выбор автора для заказа №".$nzakaz."</center></h2>";
if (($avtor=$_GET['avtor']) and $_SESSION['type']==1)
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
echo "<br> - На яндекс-кошелек. № Кошелька: <b>410011576579853</b>. Удобнее всего оплачивать в салонах связи Евросеть. Там вам помогут осуществить платеж, не возьмут комиссию и проведут его мгновенно";
echo "<br> - Перевод на карточный счет Сбербанка РФ Карточный счет: <b>676196000301185550</b>. Либо то же самое но на банковский счет сбербанка: <b>408 17 810 2 60104073927</b> Удобнее всего проводить платеж через банкоматы Сбербанка переводом на карточный счет. Это быстро, перевод осуществляется мгновенно и без комиссии. Либо черес кассу отделений Сбербанка (платеж осуществляется без комиссии в течение нескольких часов)";
echo "<br> - Перевод на QIWI-кошелек <b>89283720226</b>  Проще всего и без комиссии можно осуществить в салонах связи ЕВРОСЕТЬ, платежных терминалах QIWI, либо в любых пунктах приема денежных переводов CONTACT";
echo "<br> - После осуществления платежа, либо при возникновении любых вопросов Вам нужно будет связаться с нами любым удобным способом(напишите нашему менеджеру): <br> - Вконтакте <br> - ICQ:<br> - skype<br> - Одноклассники<br> - Вконтакте<br> - Система тикетов";
echo "<br> Не стесняйтесь, обращайтесь с любыми возникшими вопросами.";
echo "<br> В сообщении об оплате укажите номер вашего заказа, каким способом оплатили, время и сумму платежа. После этого платеж будет подтвержден.";

}
else echo "Что то пошло не так";
}
else {
$query="select o.*,a.id_user,a.nick_name,a.reyting,a.cont_spec from ocenka o, users a where a.id_user=o.id_avtor and id_zakaz=".$nzakaz." ORDER BY a.reyting DESC LIMIT 30";
$result = mysql_query($query);
echo "<table width='100%'><tr><th>Автор</th><th>Его рейтинг</th><th>Его специальность</th><th>Цена, руб.</th><th>Выбрать</th></tr>";
while ($rows = mysql_fetch_array($result))
{
	$id_avtor=$rows['id_user'];
	$nick = $rows['nick_name'];
	$reyting = $rows['reyting'];
	$cont_spec = $rows['cont_spec'];
	$price = $rows['price_all'];
	echo "<tr><td>".$nick."</td><td>".$reyting."</td><td>".$cont_spec."</td><td>".$price."</td><td><a href='index.php?link=vibor_avtora&nzakaz=".$nzakaz."&avtor=".$id_avtor."'>Выбрать</td></tr>";
}
echo "</table>";
}
?>