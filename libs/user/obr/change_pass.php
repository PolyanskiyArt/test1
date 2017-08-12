<?php
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$old_pass=$_POST['old_pass'];
$password = stripslashes($old_pass);
$password = md5(htmlspecialchars($password).'3EdC').md5((htmlspecialchars($password).'$rFv'));
$password = trim($password);
$q="SELECT password FROM users WHERE id_user = ".$_SESSION['id']." AND password='".$password."'";
$result = mysql_query($q);
$num_rows=mysql_num_rows($result);
if ($num_rows==1) // каждое поле строки присваиваем переменной 
{
$pass=$_POST['reg_pass'];
$password = stripslashes($pass);
$password = md5(htmlspecialchars($password).'3EdC').md5((htmlspecialchars($password).'$rFv'));
$password = trim($password);

$q="UPDATE users SET password='".$password."' WHERE id_user = ".$_SESSION['id'];
$result = mysql_query ($q);
if ($result==true)
echo "Пароль успешно изменен. <a href='index.php?link=lk'>Вернуться в личный кабинет</a>";
else
{
echo "Пароль не изменен. Строка запроса: ".$q;
}
}
else echo "Старый пароль не совпал";
?>