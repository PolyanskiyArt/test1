<?php
include ("./config/db_connect.php");
if ($_GET['met']=='save')
{
$link = htmlspecialchars(stripslashes($_POST['linking']));
$cont_icq = htmlspecialchars(stripslashes($_POST['cont_icq']));
$cont_vk = htmlspecialchars(stripslashes($_POST['cont_vk']));
$cont_odn = htmlspecialchars(stripslashes($_POST['cont_odn']));
$cont_skype = htmlspecialchars(stripslashes($_POST['cont_skype']));
$cont_email = htmlspecialchars(stripslashes($_POST['cont_email']));
$city = htmlspecialchars(stripslashes($_POST['city']));
$nkarta=htmlspecialchars(stripslashes($_POST['nkarta']));
$nyandex=htmlspecialchars(stripslashes($_POST['nyandex']));
$nqiwi=htmlspecialchars(stripslashes($_POST['nqiwi']));
$cont_spec = htmlspecialchars(stripslashes($_POST['cont_spec']));
$query="UPDATE users SET linking=".$link.", cont_icq='".$cont_icq."', cont_vk='".$cont_vk."', cont_odn='".$cont_odn."', cont_skype='".$cont_skype."', cont_email='".$cont_email."', nkarta='".$nkarta."', nyandex='".$yandex."', nqiwi='".$nqiwi."', cont_spec='".$cont_spec."' WHERE id_user=".$_SESSION['id'];
$result=mysql_query($query);
if ($result)
echo "<p><center>Изменения приняты.<a href='index.php?link=lk'>Вернуться в личный кабинет</a></center>";
}
else
{
echo "<center>";
$user_id=$_SESSION['id'];
$query="select * from users where id_user=".$user_id;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$login=$row['nick_name'];
$cont_icq=$row['cont_icq'];
$cont_vk=$row['cont_vk'];
$cont_spec=$row['cont_spec'];
$city=$row['city'];
$cont_odn=$row['cont_odn'];
$cont_skype=$row['cont_skype'];
$cont_email=$row['cont_email'];
$linking=$row['linking'];

switch ($linking)
{
case 1:
$select="<option value='1' selected>Вконтакте</option><option value='2'>ICQ</option><option value='3'>Одноклассники</option><option value='4'>Skype</option><option value='5'>Email</option>";
break;
case 2:
$select="<option value='1'>Вконтакте</option><option value='2' selected>ICQ</option><option value='3'>Одноклассники</option><option value='4'>Skype</option><option value='5'>Email</option>";
break;
case 3:
$select="<option value='1'>Вконтакте</option><option value='2'>ICQ</option><option value='3' selected>Одноклассники</option><option value='4'>Skype</option><option value='5'>Email</option>";
break;
case 4:
$select="<option value='1'>Вконтакте</option><option value='2'>ICQ</option><option value='3'>Одноклассники</option><option value='4' selected>Skype</option><option value='5'>Email</option>";
break;
case 5:
$select="<option value='1'>Вконтакте</option><option value='2'>ICQ</option><option value='3'>Одноклассники</option><option value='4'>Skype</option><option value='5' selected>Email</option>";
break;

}
$city=$row['city'];
$nkarta=$row['nkarta'];
$nyandex=$row['nyandex'];
$nqiwi=$row['nqiwi'];
echo "<h2><center>Редактирование профиля</center></h2>";
echo "<table><tr><th>Реквизиты</th><th>Внесенные данные</th></tr>";
echo "<form action='ndex.php?link=edit_prifile&met=save' method='post'>";
echo "<tr><td>Ваш логин: </td><td>".$login."</td></tr>";
echo "<tr><td>Номер ICQ: </td><td><input type='text' name='cont_icq' value='".$cont_icq."'></td></tr>";
echo "<tr><td>Страница ВКонтакте: </td><td><input type='text' name='cont_vk' value='".$cont_vk."'></td></tr>";
echo "<tr><td>Страница в Одноклассниках: </td><td><input type='text' name='cont_odn' value='".$cont_odn."'></td></tr>";
echo "<tr><td>Skype: </td><td><input type='text' name='cont_skype' value='".$cont_skype."'></td></tr>";
echo "<tr><td>E-mail: </td><td><input type='text' name='cont_email' value='".$cont_email."'></td></tr>";
echo "<tr><td>Приоритет способа связи: </td><td><select name='linking'>".$select."</select></td></tr>";
echo "<tr><td>Номер карты: </td><td><input type='text' name='nkarta' value='".$cont_nkarta."'></td></tr>";
echo "<tr><td>Номер кошелька Яндекс: </td><td><input type='text' name='cont_odn' value='".$nyandex."'></td></tr>";
echo "<tr><td>QIWI-кошелек: </td><td><input type='text' name='cont_odn' value='".$nqiwi."'></td></tr>";
echo "<tr><td>Город: </td><td><input type='text' name='city' value='".$city."'></td></tr>";
if ($_SESSION['type']==2)
echo "<tr><td>Специальность: </td><td><input type='text' name='cont_spec' value='".$cont_spec."'></td></tr>";
else
echo "<tr><td>Метод привлечения трафика: </td><td><input type='text' name='cont_spec' value='".$cont_spec."'></td></tr>";
echo "<tr><td><button type='submit'>Принять изменения</button></td><td><button type='reset'>Отменить изменения</button></td></tr></form></table>";
echo "<p> <a href='index.php?link=lk'>Вернуться в личный кабинет</a>";
echo "</center>";

}
?>