    <h2><center>Регистрация</center></h2>
<p> Внимание! Заполните ваши регистрационные данные и запомните ваш логин и пароль. Так же очень важно указать ваши контактные данные. Хотя бы один, по которому с вами можно будет связаться (например только ICQ-номер). Они помогут вам в кратчайшие сроки получать информацию по заказам, оплате и другие данные. 
<?php
if ($ref<>0)
$reflink="ref=".$ref;
?>

<script>
function passcorr() {
 var pass = document.getElementById("pass1").value;
 var p = /^[a-zA-Z0-9]+$/;
  if (p.test(pass)) 
 {
 err = ""; // ничего не пишем так как вывести нужно только одно Успешно
 } else {
 err = "<font color=\'red\'> Введены недопустимые символы! Разрешены только латинские буквы и цифры!</font>";
 document.getElementById("err").innerHTML=err;
 exit; // прерываем так как есть ошибка
 
 }
 
 if (pass.length>=6&&pass.length<=20) 
 {
 err = "<font color=\'green\'>Успешно!</font>";
 } else {
 err = "<font color=\'red\'>Пароль неверной длины. Пароль должен быть не менее 6 и не более 20 символов!</font>";
 document.getElementById("err").innerHTML=err;
 exit;
 }
 document.getElementById("err").innerHTML=err;
 }

 function passtest() {
 var pass = document.getElementById("pass1").value;
 var pass2 = document.getElementById("pass2").value;
  if (pass == pass2) 
 {
 err = "<font color=\'green\'>Успешно!</font>";
 document.getElementById("err2").innerHTML=err;
 exit;
 } else {
 err = "<font color=\'red\'>Пароли не совпадают!</font>";
document.getElementById("err2").innerHTML=err;
 exit;
 }
 }
</script>

<?php
if ($ref<>0)
echo "<form action='index.php?link=validate&ref=".$ref."' method='post'>";
else
echo "<form action='index.php?link=validate' method='post'>";
?>
<table  class='tbl' width='100%'>
<tr ><th>Реквизит</th><th>Поле ввода</th><th>Дополнительная информация</th></tr>
 <col width="350" valign="top">
   <col width="110" valign="top">

<tr bgcolor="#DDD"><td>
    <label>Ваш логин: </label>
</td>
<td>
    <input name="log" class="pole" type="text" size="15" maxlength="20">
</td>
<td>Только буквы латинского алфавита</td>
</tr><tr bgcolor="#EEE">
<td>
    <label>Ваш пароль: </label>
</td>
<td>
    <input id="pass1" name="pass" type="password" size="15" maxlength="15" onChange="passcorr(this.value)">
</td>
<td>
<label id="err"></label>
</td>    
</tr><tr bgcolor="#DDD">
<td>
    <label>Подтверждение пароля: </label>
</td>
<td>
    <input name="pass2" type="password" size="15" maxlength="15" id="pass2" onChange="passtest(this.value)">
</td>
<td>
<label id="err2">
</td>    

<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
</tr><tr >

<!--    <input type="hidden" name="UserType" value="Student"> -->

</tr><tr bgcolor="#eee">
<td>
    <label>Номер ICQ: </label>
</td>
<td>

    <input name="cont_icq" type="text" size="15" maxlength="15">
</td>
<td>Предпочтительно укажите в виде "123-123-123"</td>
    
</tr><tr bgcolor="#ddd">
<td>
    <label>Ссылка на страницу ВКонтакте: </label>
</td>
<td>

    <input name="cont_vk" type="text" size="15" maxlength="45">
</td>
<td>Ссылка вида "http://vk.com/id123456789"</td>

</tr><tr bgcolor="#eee">
<td>
    <label>Ссылка на страницу в Одноклассниках: </label>
</td>
<td>
    <input name="cont_odn" type="text" size="15" maxlength="50">
</td>
<td>Ссылка вида "http://www.odnoklassniki.ru/profile/далее Ваши цифры"</td>
    
</tr><tr bgcolor="#ddd">
<td>
    <label>Ваш скайп: </label>
</td>
<td>
    <input name="cont_skype" type="text" size="15" maxlength="15">
</td>
<td>Укажите в точности, если у вас есть скайп</td>
    
</tr><tr bgcolor="#eee">
<td>
    <label>Город: </label>
</td>
<td>
    <input name="cont_city" type="text" size="15" maxlength="15">
</td>
</td>
<td>Не обязательный параметр. Нужен для статистики.</td>
    
</tr><tr  bgcolor="#ddd">
<td>
    <label>ВУЗ: </label>
</td>
<td>
    <input name="cont_spec" type="text" size="15" maxlength="15">
</td>
</td>
<td>Сокращенно в виде "МГУ"</td>
</tr>
<tr bgcolor="#eee"><td><label>Как с вами лучше связываться </label>
</td>
<td>
<select name="link">
<option value="1">ICQ</option>
<option value="2">Вконтакте</option>
<option value="3">Одноклассники</option>
<option value="4">Skype</option>
</select>
</td>
<td>Обязательно укажите по каким реквизитам с вами связываться</td>

</tr>

</table>    
<center><input type="submit" name="submit" value="Зарегистрироваться"></center>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</form>
