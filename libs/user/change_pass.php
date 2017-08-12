<h2>Смена пароля</h2>
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

if ($_SESSION['id']<>0)
{
echo "<form action='index.php?link=obr_change_pass' method='post'><table class='tbl' border='0'>";
echo "<tr width='100px' bgcolor='#DDD'><td><label>Ваш старый пароль: </label></td><td>";
echo "<input name='old_pass' type='text' size='15' maxlength='15'></td></tr><tr bgcolor='#EEE'><td>";
echo "<label>Ваш новый пароль: </label></td><td>";
echo "<input id='pass1' name='reg_pass' type='password' size='15' maxlength='15' onChange='passcorr(this.value)'>";
echo "</td><td><label id='err'></label></td></tr><tr bgcolor='#DDD'><td>";
echo "<label>Подтверждение пароля: </label></td><td><input name='reg_pass2' type='password' size='15' maxlength='15' id='pass2' onChange='passtest(this.value)'>";
echo "</td><td><label id='err2'></td></tr></table><input type='submit' name='submit' value='Сменить пароль'></form>";
}
else echo 'Ошибка, вы не зарегистрированы в системе';
?>