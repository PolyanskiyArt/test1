<?php
if ($_SESSION['type']==77)
if ($id_user=$_GET['id_user'])
{
$query="select * from users where id_user=".$id_user;
if ($result=mysql_query($query))
{
echo "<table><tr><th>Реквизит</th><th>Значение</th><th>Действие</th></tr>";
$row=mysql_fetch_array($result);
$nick_name=$row['nick_name'];
$password=$row['password'];
$cont_icq=$row['cont_icq'];
$cont_vk=$row['cont_icq'];
$cont_odn=$row['cont_icq'];
$cont_skype=$row['cont_icq'];
$linking=$row['linking'];
$cont_spec=$row['cont_spec'];
$date_registration=$row['date_registration'];
$date_last=$row['date_last'];
$reyting=$row['reyting'];
$schet=$row['schet'];
$nkarta=$row['nkarta'];
$nyandex=$row['nyandex'];
$nqiwi=$row['nqiwi'];
$ip=$row['ip'];
$is_avtor=$row['is_avtor'];
$is_partner=$row['is_partner'];
$id_partner=$row['id_partner'];
$banned=$row['banned'];
echo "<tr><td>Логин</td><td>".$nick_name."</td><td></td></tr>";
echo "<tr><td>Пароль</td><td>".$password."</td><td></td></tr>";
echo "<tr><td>ICQ</td><td>".$cont_icq."</td><td></td></tr>";
echo "<tr><td>VK.com</td><td>".$cont_vk."</td><td></td></tr>";
echo "<tr><td>Odnoklassniki</td><td>".$cont_odn."</td><td></td></tr>";
echo "<tr><td>Skype</td><td>".$cont_skype."</td><td></td></tr>";
echo "<tr><td>Способ связи</td><td>".$linking."</td><td></td></tr>";
echo "<tr><td>Специальная информация</td><td>".$cont_spec."</td><td></td></tr>";
echo "<tr><td>Рейтинг</td><td>".$reyting."</td><td></td></tr>";
echo "<tr><td>Счёт</td><td>".$schet."</td><td></td></tr>";
echo "<tr><td>Номер карты</td><td>".$nkarta."</td><td></td></tr>";
echo "<tr><td>Яндекс</td><td>".$nyandex."</td><td></td></tr>";
echo "<tr><td>QIWI</td><td>".$nqiwi."</td><td></td></tr>";
echo "<tr><td>Автор</td><td>".$is_avtor."</td><td></td></tr>";
echo "<tr><td>Партнер</td><td>".$is_partner."</td><td></td></tr>";
echo "<tr><td>Дата регистрации</td><td>".$date_registration."</td><td></td></tr>";
echo "<tr><td>Последний заход</td><td>".$date_last."</td><td></td></tr>";
echo "<tr><td>Заблокирован</td><td>".$banned."</td><td></td></tr>";
echo "</table>";
}
else
{
echo "Пользователем с id='".$id_user."' в базе не найден";
}
}

?>