<?php
    if (isset($_POST['log'])) { $login = $_POST['log']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$link = htmlspecialchars(stripslashes($_POST['link']));
$cont_icq = htmlspecialchars(stripslashes($_POST['cont_icq']));
$cont_vk = htmlspecialchars(stripslashes($_POST['cont_vk']));
$cont_odn = htmlspecialchars(stripslashes($_POST['cont_odn']));
$cont_skype = htmlspecialchars(stripslashes($_POST['cont_skype']));
$cont_city = htmlspecialchars(stripslashes($_POST['cont_city']));
$cont_vuz = htmlspecialchars(stripslashes($_POST['cont_spec']));
$date_registr = date('Y-m-d H:i:s');
    $password = stripslashes($password);
    $password = md5(htmlspecialchars($password).'3EdC').md5((htmlspecialchars($password).'$rFv'));
    $password = trim($password);
 //удаляем лишние пробелы
    $login = trim($login);
 // подключаемся к базе
    include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id_user FROM users WHERE nick_name='$login'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id_user'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
if ($_GET['ref']<>0)
$ref=$_GET['ref'];
    $ip = $_SERVER['REMOTE_ADDR'];

 // если такого нет, то сохраняем данные
$query="INSERT INTO users (nick_name,password,cont_icq,cont_vk,cont_odn,cont_skype,city,cont_spec,date_registration,date_last,id_partner,linking,ip) VALUES('$login','$password','$cont_icq','$cont_vk','$cont_odn','$cont_skype','$cont_city','$cont_vuz','$date_registr','$date_registr','$ref','$link','$ip')";
    $result2 = mysql_query ($query);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php?link=autorization'>Вход на сайт</a>";
    }
 else {
echo "\n".$_POST['user_type'];
    echo "Ошибка! Вы не зарегистрированы.";
    }
    
?>