<?php
$nzakaz=$_GET['nzakaz'];
echo "<center><h2>Отправка готовой работы по заказу №".$nzakaz."</h2></center>";
if ($_FILES['userfile']['name'])
{
$allowed_filetypes = array('.jpg','.jpeg','.gif','.bmp','.png', '.rar','.zip','.doc','.docx','.xls','.xlsx','.ppt','.pptx','.rtf','.txt');
$max_filesize = 3030000;
$filename = $_FILES['userfile']['name'];
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
$uploaddir = './uploads/otvet/';
$uploadfile = $uploaddir . $_SESSION['id'] . basename($_FILES['userfile']['name']);
if(!in_array($ext,$allowed_filetypes))
 die('Данный тип файла не поддерживается. Повторите попытку предварительно заархивировав файл в ZIP или RAR. С уважением, Администрация.');
if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
 die('Фаил слишком большой.');
if(!is_writable($uploaddir))
 die('Невозможно загрузить фаил в папку. Установите права доступа - 777.');

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) || $filename=='') {
include ("./config/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 

$query="UPDATE zakaz SET file_otvet='".$uploadfile."', time_finished='".date('Y-m-d H:i:s')."' where id_zakaz=".$nzakaz;
    $result2 = mysql_query ($query);
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {

    echo "Файл готовой работы был отправлен и будет проверен администрацией.<br> В случае непрохождения проверки оплата за работу будет возвращена заказчику, ваш рейтинг будет понижен.<br> После успешного прохождения проверки ваш счет пополнится, а рейтинг увеличится.<a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Неверное оформление. query= ".$query;
    }

	
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}


print "</pre>";

}
else
{
echo "<h4>Большая просьба выкладывать готовые работы в заархивированном виде RAR или ZIP для уменьшения объемов передаваемых файлов и увеличения скорости работы. <br>С уважением, администрация.";
echo "<form enctype='multipart/form-data' action='index.php?link=file_otvet&nzakaz=".$nzakaz."' method='post'>";
echo "<input name='userfile' type='file'size='41' />";
echo "<input type='submit' value='Отправить'>";
echo "</form>";
}
?>