<?php
if ($_SESSION['login']=='') {
    session_start();
    include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
    $ref=$_GET['ref'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d');
    $q="SELECT * FROM uniquehits WHERE ip ='".$ip."' AND date='".$date."'";
    $fetch = mysql_query($q) or die(mysql_error());
    if ( mysql_num_rows($fetch) == 0 )
    {
        if ($ref)
	$q="INSERT INTO uniquehits(ip, date,ref) VALUES('$ip', NOW(), '$ref')";
        else
	$q="INSERT INTO uniquehits(ip, date) VALUES('$ip', NOW())";

       mysql_query($q) or die(mysql_error());
    $query="select * from banned where ip='".$ip."'";
    $result=mysql_query($query);
    if ($myrow = mysql_fetch_array($result))
      {
	exit ("Ваш аккаунт был заблокирован. Причина:'".$myrow['why']."'. Можете обратиться в службу тех. поддержки.");
      }
    }
    mysql_close($db_link);

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);}  //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
//    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$type_user=1; 
$result = mysql_query("SELECT * FROM users WHERE nick_name='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);

if ($myrow['is_avtor']==1)
	$type_user=2;
if ($myrow['is_partner']==1)
	$type_user=3;
if ($myrow['is_avtor'] ==1 and $myrow['is_partner']==1)
	$type_user=4;


}
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
//    exit("");	
    }
    else {
    //если существует, то сверяем пароли
    $password = md5(htmlspecialchars($password).'3EdC').md5((htmlspecialchars($password).'$rFv'));

    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    if ($myrow['nick_name']<>'mergenpurgen')
    $_SESSION['type']=$type_user; 
else
    $_SESSION['type']=77;
    $_SESSION['login']=$myrow['nick_name']; 
	$_SESSION['id']=$myrow['id_user'];
	$query="update users set date_last='".date('Y-m-d H:i:s')."' where id_user=".$_SESSION['id'];
    $result = mysql_query($query);
    }
 else {
    //если пароли не сошлись
    echo 1;
    exit("<meta http-equiv='refresh' content='0; url=index.php?link=autorization'>");	
    }
    }
}

    ?>