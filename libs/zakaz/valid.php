<?php
//Обработка файла
//
if (isset($_POST['sp']))
{
echo "<center><h2>Ваш заказ №".$_GET['nzakaz']." принят.</h2></center><p>Оплатить работу нужно по следующим реквизитам:";
$sp = htmlspecialchars(stripslashes($_POST['sp']));
switch ($sp)
{
case 1:
$s="На карту сбербанка <b>№ 6761 9600 03011 85550</b>";
$s1="Проще всего оплатить в отделениях сберегательного банка, либо через Сбербанк Онлайн";
break;
case 2:
$s="На яндекс <b>№ 410011576579853</b>";
$s1="Проще всего оплатить в салонах связи ЕВРОСЕТЬ, либо с помощью электронных денег";
break;
case 3:
$s="На QIWI <b>№8 928 372 0226 </b>";
$s1="Проще всего оплатить при помощи терминала(мультикассы), либо с помощью электронных денег";
break;
}
echo "<p>Заказ №".$_GET['nzakaz']."<br>";
echo "<p>Сумма к уплате: <b>".$_GET['cena']." руб.</b><br>";
echo "<p>".$s;
echo "<p>".$s1;
echo "<p><b>Важно:</b> после оплаты напишите нам о том, что вы оплатили работу любым из этих способов:";
echo "<li>Вконтакте: <a href='www.vk.com/stav_student' color='#000'>vk.com/stav_student</a><i> Добавляйтесь в друзья, не стесняйтесь</i></li>";
echo "<li>ICQ: 608-413-708</li>";
echo "<li>skype: UmStudenta</li>";
echo "<li> MailAgent: umstudenta@mail.ru</li>";
echo "<p>Сразу после оплаты наши авторы приступят к выполнению заказа.";
}
else
{
$allowed_filetypes = array('.jpg','.jpeg','.gif','.bmp','.png', '.xls', '.doc','.rtf','.docx','.xls','.zip','.rar','.xlsx');
$max_filesize = 3030000;
$filename = $_FILES['userfile']['name'];
if ($filename<>''){
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
$uploaddir = './uploads/zadan/';
$uploadfile = $uploaddir . $_SESSION['id'] . basename($_FILES['userfile']['name']);
if(!in_array($ext,$allowed_filetypes))
 die('Данный тип файла не поддерживается.');
	if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
 die('Фаил слишком большой.');
if(!is_writable($uploaddir))
 die('Невозможно загрузить фаил в папку. Установите права доступа - 777.');
}
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) || $filename=='') {
$type_work = htmlspecialchars(stripslashes($_POST['type_work']));
$predmet = htmlspecialchars(stripslashes($_POST['predmet']));
$tema = htmlspecialchars(stripslashes($_POST['tema']));
$v_ot = htmlspecialchars(stripslashes($_POST['v_ot']));
$v_do = htmlspecialchars(stripslashes($_POST['v_do']));
$type_link = htmlspecialchars(stripslashes($_POST['type_link']));
$txt_link = htmlspecialchars(stripslashes($_POST['txt_link']));

$need_finished = htmlspecialchars(stripslashes($_POST['need_finished']));
$dop = htmlspecialchars(stripslashes($_POST['dop']));
$date = date('Y-m-d H:i:s');
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

$id_partner=0;
if ($_GET['ref'])
$id_partner=$_GET['ref'];
mysql_set_charset( 'utf8' );
$qq1="INSERT INTO zakaz (type_work,predmet,tema,v_ot,v_do,need_finished,file_zadan,status,dop,time_zakaz,id_partner,type_link,txt_link) VALUES('$type_work','$predmet','$tema','$v_ot','$v_do','$need_finished','$uploadfile',0,'$dop','$date','$id_partner','$type_link','$txt_link')";
print_r($qq1);
$charset = mysql_client_encoding($db_link);

echo "Текущая кодировка: $charset\n";
    $result2 = mysql_query ($qq1);

    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "<p>Ваш заказ принят для оценки. <br>";
$nzakaz=mysql_insert_id();
include ("./libs/zakaz/obr/ocenka.php");
    }
 else {
    echo "Ошибка! Неверное оформление заказа";
    }
	
    echo " ";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
}
//echo 'Некоторая отладочная информация:';
//print_r($_FILES);


?>