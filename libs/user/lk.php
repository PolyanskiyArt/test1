<center><h2>Личный кабинет</h2></center>
<?php

switch($_SESSION['type']){
case 1:
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$result = mysql_query("SELECT * FROM users WHERE id_user=".$_SESSION['id']."");
echo "<table class='tbl' width='100%'><tr><th>Ваш логин</th><th>icq</th><th>Ссылка ВКонтакте</th><th>Ссылка в Одноклассники</th><th>skype</th><th>Дата регистрации</th><th>Город</th></tr>";
while ($rows = mysql_fetch_array($result)) // каждое поле строки присваиваем переменной 
{ 
// В этом цикле осуществляем какие-либо операции с переменными $ test _1 и $ test _2 // 
// К примеру, просто выводим их 
$id_student=$rows['id_user'];
$nick_name=$rows['nick_name'];
$password=$rows['password'];
$cont_icq=$rows['cont_icq'];
$cont_vk=$rows['cont_vk'];
$cont_odn=$rows['cont_odn'];
$cont_skype=$rows['cont_skype'];
$date_registration=$rows['date_registration'];
$sity=$rows['city'];
$vuz=$rows['cont_spec'];
$date_last=$rows['date_last'];
//echo "<tr><td>".$id_student;
echo "<tr><td>".$nick_name;
//echo "</td><td>".$password;
echo "</td><td>".$cont_icq;
echo "</td><td>".$cont_vk;
echo "</td><td>".$cont_odn;
echo "</td><td>".$cont_skype;
echo "</td><td>".$date_registration;
//echo "</td><td>".$date_last;
echo "</td><td>".$sity;
echo "</td><td>";
echo "<a href='index.php?link=edit_prifile'><img src='./images/edit.png' alt='Редактировать профиль'></a></td></tr>";
echo "</table>";
echo "<a href='index.php?link=change_pass'>Сменить пароль</a>";


}

$query="select * from zakaz where id_student=".$_SESSION['id'];
$result = mysql_query($query);
if ($result)
{
include ('./libs/functions/zakaz_status.php');
echo "<h2><center>Список ваших заказов</center></h2>";
echo "<table class='tbl' width='100%'><tr><th>№ заказа</th><th>Тип работы</th><th>Предмет</th><th>Тема</th><th>Статус</th></tr>";
while ($rows = mysql_fetch_array($result))
{
$nzakaz=$rows['id_zakaz'];
$type_work=f_type_work($rows['type_work']);
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$status=status($rows['status'], $nzakaz,$rows['file_otvet']);

echo "<tr><td>".$nzakaz."</td><td>".$type_work."</td><td>".$predmet."</td><td>".$tema."</td><td>".$status."</td></tr>";

}
echo "</table>";

}
break;

case 2:
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$query="SELECT * FROM users WHERE id_user='".$_SESSION['id']."'";
$sql = mysql_query($query);
echo "<table class='tbl' width='100%'><tr><th>Логин</th><th>icq</th><th>VK Link</th><th>Link odn</th><th>skype</th><th>Дата регистрации</th><th>Город</th><th>Специальность</th><th>Счет</th></tr>";

while ($rows = mysql_fetch_array($sql)) // каждое поле строки присваиваем переменной 
{ 
$reyting=$rows['reyting'];
$id_avtor=$rows['id_avtor'];
$nick_name=$rows['nick_name'];
$password=$rows['password'];
$cont_icq=$rows['cont_icq'];
$cont_vk=$rows['cont_vk'];
$cont_odn=$rows['cont_odn'];
$cont_skype=$rows['cont_skype'];
$date_registration=$rows['date_registration'];
$sity=$rows['city'];
$schet=$rows['schet'];
$cont_spec=$rows['cont_spec'];
$date_last=$rows['date_last'];
//echo "<tr><td>".$id_avtor;
echo "<tr><td>".$nick_name;
//echo "</td><td>".$password;
echo "</td><td>".$cont_icq;
echo "</td><td>".$cont_vk;
echo "</td><td>".$cont_odn;
echo "</td><td>".$cont_skype;
echo "</td><td>".$date_registration;
//echo "</td><td>".$date_last;
echo "</td><td>".$sity;
echo "</td><td>".$cont_spec;
echo "</td><td>".$schet;
echo "</td><td><a href='index.php?link=edit_prifile'><img src='./images/edit.png' alt='Редактировать профиль'></a></td></tr>";
}
echo "</table>";
echo "<a href='index.php?link=change_pass'>Сменить пароль</a>";
echo "<br>Мой рейтинг: ".$reyting;
$date = date('Y-m-d H:i:s');
$query="select * from zakaz where status<>10 and id_avtor=".$_SESSION['id'];
//echo $query;
$result = mysql_query($query);
if ($result)
{
echo "<h2><center>Список ваших заказов</center></h2>";
echo "<table class='tbl' width='100%'><tr><th>№ заказа</th><th>Тип работы</th><th>Предмет</th><th>Тема</th><th>Статус</th><th>Готовая работа</th></tr>";
include ("./libs/functions/zakaz_status.php");
while ($rows = mysql_fetch_array($result))
{
$nzakaz=$rows['id_zakaz'];
$type_work=f_type_work($rows['type_work']);
$predmet=$rows['predmet'];
$tema=$rows['tema'];
$status=status($rows['status'], $nzakaz,'');
if ($rows['file_otvet']=='')
$got="<a href='index.php?link=file_otvet&nzakaz=".$nzakaz."'>Приложить готовую работу</a>";
else
$got="Работа готова. <a href='index.php?link=file_otvet&nzakaz=".$nzakaz."'>Заменить</a>";
echo "<tr><td>".$nzakaz."</td><td>".$type_work."</td><td>".$predmet."</td><td>".$tema."</td><td>".$status."</td><td>".$got."</td></tr>";

}
echo "</table>";

}
break;
case 3:
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
echo "<table class='tbl' width='100%'><tr><th>Логин</th><th>Номер icq</th><th>Ссылка ВКонтакте</th><th>Ссылка в Одноклассниках</th><th>skype</th><th>Дата регистрации</th><th>Город</th><th>Привлечение трафика</th><th>Ваша ссылка для рекламы</th></tr>";
$query="SELECT * FROM users WHERE id_user='".$_SESSION['id']."'";
$sql = mysql_query($query);

while ($rows = mysql_fetch_array($sql)) // каждое поле строки присваиваем переменной 
{ 
$id_partner=$rows['id_user'];
$nick_name=$rows['nick_name'];
$password=$rows['password'];
$cont_icq=$rows['cont_icq'];
$cont_vk=$rows['cont_vk'];
$cont_odn=$rows['cont_odn'];
$cont_skype=$rows['cont_skype'];
$date_registration=$rows['date_registration'];
$sity=$rows['city'];
$cont_spec=$rows['cont_spec'];
$date_last=$rows['date_last'];
$ref_link=$site."?ref=".$id_partner;
//echo "<tr><td>".$id_avtor;
echo "<tr><td>".$nick_name;
//echo "</td><td>".$password;
echo "</td><td>".$cont_icq;
echo "</td><td>".$cont_vk;
echo "</td><td>".$cont_odn;
echo "</td><td>".$cont_skype;
echo "</td><td>".$date_registration;
//echo "</td><td>".$date_last;
echo "</td><td>".$sity;
echo "</td><td>".$cont_spec;
echo "</td><td>".$ref_link;

echo "</td><td><a href='index.php?link=edit_prifile'><img src='./images/edit.png' alt='Редактировать профиль'></a></td></tr>";
}
echo "</td></tr></table>";
echo "<a href='index.php?link=change_pass'>Сменить пароль</a><br>";

echo "<h2><center>Статистика уникальных посещений по вашей ссылке</center></h2>";
echo "<table class='tbl' width='100%'><tr><th>Дата</th><th>Количество посещений</th><th>Количество зарегистрированных студентов</th></tr>";
$query="SELECT DISTINCT u.date, count(u.ip) as count, count(students.ip) as count_reg FROM uniquehits u,users WHERE DATE_FORMAT(users.date_registration,'%Y-%m-%d')=u.date and users.id_partner=".$_SESSION['id']." and u.ref='".$_SESSION['id']."' LIMIT 30";
$sql = mysql_query($query);
if ($sql)
while ($rows = mysql_fetch_array($sql)) // каждое поле строки присваиваем переменной 
{ 
$date=$rows['date'];
$count=$rows['count'];
$count_reg=$rows['count_reg'];
echo "<tr><td>".$date."</td><td>".$count."</td><td>".$count_reg."</td></tr>";
}
echo "</table>";

echo "<h2><center>Ваши доходы</center></h2>";
echo "<table class='tbl' width='100%'><tr><th>Дата</th><th>Номер заказа</th><th>Сумма</th></tr>";
$query="select DATE_FORMAT(z.time_finished,'%Y-%m-%d') as time, z.id_zakaz, s.id_partner, o.price_partner from zakaz z, users s, ocenka o where z.id_student=s.id_user and z.status=10 and o.id_zakaz=z.id_zakaz and s.id_partner=".$_SESSION['id']." LIMIT 30";
$sql = mysql_query($query);
if ($sql)
while ($rows = mysql_fetch_array($sql)) // каждое поле строки присваиваем переменной 
{ 
$time=$rows['time'];
$id_zakaz=$rows['id_zakaz'];
$price_partner=$rows['price_partner'];
echo "<tr><td>".$time."</td><td>".$id_zakaz."</td><td>".$price_partner."</td></tr>";
}
echo "</table>";


break;
}
?>