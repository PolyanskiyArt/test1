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

<center>    <h2>Авторизация</h2> </center>
<center><table><tr><td>
    <form action="index.php?link=autorized" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    <label>Ваш логин:</label></td><td>
    <input class="text" name="login" type="text" size="25" maxlength="15" onfocus="this.value = ''" value="Введите имя пользователя">
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    </td><tr><tr><td><label>Ваш пароль:</label></td><td>
    <input class="text" name="password" type="password" size="15" maxlength="15" >
</td></tr>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<br>
<br>
<tr><td colspan=2>
<input name="submit" class='btn' type="submit" value="Войти">
</td></tr>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form></table>
</center>
