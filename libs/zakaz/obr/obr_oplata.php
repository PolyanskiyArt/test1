<?php
//Обработка файла
//
$allowed_filetypes = array('.jpg','.jpeg','.gif','.bmp','.png', '.rar','.zip');
$max_filesize = 3030000;
$filename = $_FILES['userfile']['name'];
if ($filename<>''){
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
$uploaddir = './uploads/oplata/';
$uploadfile = $uploaddir . $_SESSION['id'] . basename($_FILES['userfile']['name']);
if(!in_array($ext,$allowed_filetypes))
 die('Данный тип файла не поддерживается.');
if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
 die('Фаил слишком большой.');
if(!is_writable($uploaddir))
 die('Невозможно загрузить фаил в папку. Установите права доступа - 777.');
}
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) || $filename=='') {
$type_oplata = htmlspecialchars(stripslashes($_POST['type_oplata']));
$summa = htmlspecialchars(stripslashes($_POST['summa_oplata']));
$time = htmlspecialchars(stripslashes($_POST['time_oplata']));
$nzakaz=$_GET['nzakaz'];
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
$query1="INSERT INTO oplata (id_student,id_zakaz,sposob,time_oplata,summa,foto) VALUES (".$_SESSION[id].",".$nzakaz.",".$type_oplata.",'".$time."',".$summa.",'".$uploadfile."')";
    $result1 = mysql_query ($query1);
$query2="UPDATE zakaz SET status=4 where id_zakaz=".$nzakaz;
    $result2 = mysql_query ($query2);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE' and $result1=='TRUE')
    {
    echo "Информация об оплате принята в обработку. После подтверждения платежа и готовности работы вы сможете забрать ее в личном кабинете. В случае возникновения вопросов обращайтесь в службу поддержки.<a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Неверное оформление. query= ".$query1;
    }

	
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}



?>