<h2><center>Заказ</center></h2>
<?php
$n_zakaz=$_GET['nzakaz'];
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$table = "zakaz";
$result = mysql_query ("SELECT * FROM ".$table." WHERE id_zakaz=".$n_zakaz); // Выбор строк с 0-ой по 35-ую с сортировкой по полю test _1 

echo "<table class='tbl' width='100%'>";
echo "<tr><th>№";
echo "</th><th>Время заказа";
echo "</th><th>Тип работы";
echo "</th><th>Предмет";
echo "</th><th>Тема";
echo "</th><th>Объем от";
echo "</th><th>Объем до";
echo "</th><th>Нужно закончить";
echo "</th><th>Приложение";
echo "</th><th>Дополнительная информация";
echo "</th></tr>";

while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{ 
// В этом цикле осуществляем какие-либо операции с переменными $ test _1 и $ test _2 // 
// К примеру, просто выводим их 
$id_zakaz=$rows['id_zakaz'];
switch ($rows['type_work'])
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
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$v_ot=$rows['v_ot'];
$v_do=$rows['v_do'];
$need_finished=$rows['need_finished'];
$file_zadan=$rows['file_zadan'];
$dop=$rows['dop'];
$time_zakaz=$rows['time_zakaz'];
echo "<tr><td>".$id_zakaz;
echo "</td><td>".$time_zakaz;
echo "</td><td>".$type_work;
echo "</td><td>".$predmet;
echo "</td><td>".$tema;
echo "</td><td>".$v_ot;
echo "</td><td>".$v_do;
echo "</td><td>".$need_finished;
echo "</td><td><a href='".$file_zadan."'>Приложенный файл</a>";
echo "</td><td>".$dop;
echo "</td></tr>";
}
echo "</table>";
echo "<p>Внимание! После оценки заказчик может выбрать Вас в качестве исполнителя. В этом случае вы должны выполнить данную работу в срок в соответствии со всеми указанными требованиями. Готовая работа должна проходить проверку на плагиат. Администраторы проверяют работы программой Etxt, минимальный уровень уникальности - 60%(если другое не указано заказчиком). В случае выявления жульничества, отправки в качестве работы не относящегося к заказу файла, ваш аккаунт может быть заблокирован. При выявлении недочетов администрация может связаться с Вами, указать на недочеты, которые необходимо исправить.";
echo" <form action='index.php?link=ocenka&nzakaz=".$id_zakaz."' method='post'>";
echo "<p><label>За какую сумму вы возьметесь за выполнение данного задания:<br></label><input name='price_avtor' type='text'>";
echo "    <input type='submit' name='submit' value='Оценить'>";
echo "</form>";
?>
