<h2><center>Регистрация в парнерской системе</center></h2>
 <style type="text/css">
   INPUT {
    border: 1px solid #00F; /* Исходная рамка вокруг поля */
    width: 200px; /* Ширина поля */ 
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
   }
   INPUT:focus {
    border: 1px solid #39c; /* Рамка при получении фокуса */
    width: 200px; /* Ширина поля */
   }
   .btn {
height:30px;
width:300px;
background:#CCF;
font-size:18px;
color:#00F;
}

</style>

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
Сайт УмСтудента имеет интегрированную партнерскую систему. После регистрации в личном кабинете для вас будет сгенерирована ссылка для привлечения студентов. <br>С каждого оплаченного заказа студента, который перешел по вашей ссылки вы будете получать вознаграждение. Примечательно, что никаких ограничений по времени действия в нашей программе нет. То есть вознаграждение вы будете получать не только с первого заказа, но и через год и через 5 лет с последующих заказов.
<p>Никаких ограничений по способу привлечения клиентов у нас практически нет. Запрещено только рекламировать сайт с помощью спама(в любом его проявлении, будь это icq, соц. сети, e-mail-рассылка и прочее). В случае выявления нарушения этого правила вам сначала будет выдано предупреждение. Если предупреждение не приведет к изменениям, ваш аккаунт будет заблокирован.
<p>За дополнительными подробностями можете обратиться к специалистам службы поддержки. С уважением, Администрация.
<br>
<center>
<noindex>
<form action="index.php?link=validate_partner" method="post">
<table class='tbl' width='100%'>
<tr ><th>Реквизит</th><th>Поле ввода</th><th>Дополнительная информация</th></tr>
 <col width="350" valign="top">
   <col width="110" valign="top">
<tr width="100px" bgcolor="#DDD"><td>
    <label>Ваш логин: </label>
</td>
<td>
    <input name="reg_login" type="text" size="15" maxlength="15">
</td>
<td>Только буквы латинского алфавита и цифры</td>
</tr><tr bgcolor="#EEE">
<td>
    <label>Ваш пароль: </label>
</td>
<td>
    <input id="pass1" name="pass1" type="password" size="15" maxlength="15" onChange="passcorr(this.value)">
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
</td>    <td>Пример: 123 456 789</td>

</tr><tr bgcolor="#ddd">
<td>
    <label>Ссылка на страницу ВКонтакте: </label>
</td>
<td>

    <input name="cont_vk" type="text" size="15" maxlength="45">
</td>    <td>Пример: www.vk.com/id19213141</td>
    
</tr><tr bgcolor="#eee">
<td>
    <label>Ссылка на страницу в Одноклассниках: </label>
</td>
<td>
    <input name="cont_odn" type="text" size="15" maxlength="50">
</td>    <td>Цифры после profile "odnoklassniki.ru/profile/<b>далее Ваши цифры</b>"</td>
    
</tr><tr bgcolor="#ddd">
<td>
    <label>Ваш скайп: </label>
</td>
<td>
    <input name="cont_skype" type="text" size="15" maxlength="15">
</td>    <td>Хотя бы одно поле контактов вы должны заполнить</td>
    
</tr><tr bgcolor="#eee">
<td>
    <label>Город: </label>
</td>
<td>
    <input name="cont_city" type="text" size="15" maxlength="15">
</td>    <td>Пример: Москва</td>
    
</tr><tr  bgcolor="#ddd">
<td>
    <label>Методы привлечения трафика: </label>
</td>
<td>
    <input name="cont_spec" type="text" size="25" maxlength="25">
</td>
    <td>Пример: "Арбитраж" или "Реклама в соц сетях"</td>
</tr>
<tr  bgcolor="#eee">
<td>
    <label>Номер карты Сбербанка РФ: </label>
</td>
<td>
    <input name="nkarta" type="text" size="25" maxlength="25">
</td>
    <td>Пример: 4987 9234 9242 1414</td>
<tr  bgcolor="#ddd">
<td>
    <label>Номер QIWI: </label>
</td>
<td>
    <input name="nqiwi" type="text" size="25" maxlength="25">
</td>
    <td>Пример: 89998881122</td>
</tr>
<tr  bgcolor="#eee">
<td>
    <label>Номер Яндекс-кошелька: </label>
</td>
<td>
    <input name="nyandex" type="text" size="25" maxlength="25">
</td>
    <td>Пример: 410000000000001</td>
</tr>
<tr bgcolor="#ddd"><td><label>Как с вами лучше связываться </label>
</td>
<td>
<select name="link">
<option value="1">ICQ</option>
<option value="2">Вконтакте</option>
<option value="3">Одноклассники</option>
<option value="4">Skype</option>
</select>
</td>
    <td>Обязательно укажите каким способом с вами лучше связаться</td>
</tr>
</table>    

<br>
    <input type="submit" name="submit" value="Зарегистрироваться" class='btn'>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</form>
</center>
</noindex>