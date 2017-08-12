<center>    <h2>Регистрация автора</h2></center>
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
 if (pass == pass2 ) 
 {
 err = "<font color=\'green\'>Успешно!</font>";
 document.getElementById("err2").innerHTML=err;
passcorr();
 exit;
 } else {
 err = "<font color=\'red\'>Пароли не совпадают!</font>";
document.getElementById("err2").innerHTML=err;
 exit;
 }
 }
</script>
Сайт УмСтудента предлагает авторам студенческих работ зарабатывать на нашем сайте. Преимущества нашего портала:
<li>Мы сами занимаемся привлечением студентов с разных городов и учебных заведений.</li>
<li>Мы осуществляем прием платежей студентов, объясняем каким образом пользоваться системами электронных платежей</li>
<li>Мы предоставляем услуги тех. поддержки как для авторов, так и для студентов. Отвечаем на любые вопросы.</li>
<li>Вы сами оцениваете задания и устанавливаете свою цену. После оплаты студента и получения готовой работы вы получаете на свой счет ВСЮ СУММУ ПОЛНОСТЬЮ</li>
<li>На нашем сайте мы ведем систему рейтингов. Таким образом вас исходя из озвученной цены и вашего автора</li>
<li>Выплаты ганораров осуществляем по вашему запросу(не чаще одного раза в неделю) на ваши реквизиты. Вы можете указать номер яндекс-кошелька, номер пластиковой карты или номер счета в банке. При возникновении любых вопросов, предложений можете обратиться к специалистам службы поддержки.</li>
<li>Мы сами связываемся со студентом при необходимости оплатить заказ, забрать готовую работу и т.п. То есть полностью обслуживаем клиента.</li>
Таким образом на нашем сайте вы можете неплохо зарабатывать сидя дома не тратя время и усилия на поиск клиентов, рекламу, переписку, заниматься приемом и проверкой платежей, вести клиентскую базу. Получение ганорара за полностью выполненную работу мы ГАРАНТИРУЕМ. В случае несоответствия выполнененной работы требованиям и жалобы со стороны студента, оплата в полном размере возвращается студенту. Все работы перед тем как их получают клиенты проверяются нашими администраторами. 
<p>Для регистрации заполните форму:
<br>
<center>
<noindex>
    <form action="index.php?link=validate_avtor" method="post">
<table class='tbl' width='100%'>
<tr ><th>Реквизит</th><th>Поле ввода</th><th>Дополнительная информация</th></tr>
 <col width="350" valign="top">
   <col width="110" valign="top">
<tr bgcolor="#DDD"><td width='100px'>
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
    <input id="pass1" name="reg_pass" type="password" size="15" maxlength="15" onChange="passcorr(this.value)">
</td>
<td>
<label id="err"></label>
</td>    
</tr><tr bgcolor="#DDD">
<td>
    <label>Подтверждение пароля: </label>
</td>
<td>
    <input name="reg_pass2" type="password" size="15" maxlength="15" id="pass2" onChange="passtest(this.value)">
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
</td>        <td>Пример: 123 456 789</td>
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
</td>
<td>Пример: Москва</td>    
</tr><tr  bgcolor="#ddd">
<td>
    <label>Специальность: </label>
</td>
<td>
    <input name="cont_spec" type="text" size="25" maxlength="25">
</td>
<td>Пример: Экономист-бухгалтер</td>
</tr><tr  bgcolor="#eee">
<td>
    <label>Номер карты сбербанка: </label>
</td>
<td>
    <input name="nkarta" type="text" size="25" maxlength="25">
</td>
<td>Пример: 1111 2222 3333 4444</td>
</tr><tr  bgcolor="#ddd">
<td>
    <label>Номер Яндекс-кошелька: </label>
</td>
<td>
    <input name="nyandex" type="text" size="25" maxlength="25">
</td>
<td>Пример: 410000000000000123</td>
</tr>
</tr><tr  bgcolor="#eee">
<td>
    <label>Номер QIWI: </label>
</td>
<td>
    <input name="nyandex" type="text" size="25" maxlength="25">
</td>
<td>Пример: 89229992233</td>
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
<td>Обязательно укажите удобный для вас способ связи</td>
</tr>

</tr>
</table>    
<br>
    <input type="submit" name="submit" id="button" class='btn' value="Зарегистрироваться">
</center>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</form>
</noindex>

