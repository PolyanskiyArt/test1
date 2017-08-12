<center><h2>Список студентов</h2></center><?php
if ($_SESSION['type']==77)
{
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$table = "students";
$result = mysql_query ("SELECT * FROM users where is_avtor=0 and is_partner=0"); // Выбор строк с 0-ой по 35-ую с сортировкой по полю test _1 
$num_rows=mysql_num_rows($result);

echo "<table class='tbl' width='100%'><tr><th>№</th><th>Логин</th><th>icq</th><th>VK Link</th><th>Link odn</th><th>skype</th><th>Дата регистрации</th><th>Последний заход</th><th>Город</th><th>Вуз</th></tr>";
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
$vuz=$rows['cont_spec'];
$date_registration=$rows['date_registration'];
$sity=$rows['city'];
$date_last=$rows['date_last'];
echo "<tr><td>".$id_student;
echo "</td><td>".$nick_name;
//echo "</td><td>".$password;
echo "</td><td>".$cont_icq;
echo "</td><td>".$cont_vk;
echo "</td><td>".$cont_odn;
echo "</td><td>".$cont_skype;
echo "</td><td>".$date_registration;
echo "</td><td>".$date_last;
echo "</td><td>".$sity;
echo "</td><td>".$vuz;
echo "</td></tr>";
}
echo "</table>";
}
?>
