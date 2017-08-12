<?php
if ($_GET['ref']<>0)
{
$reflinkv="?ref=".$_GET['ref'];
$reflinka="&ref=".$_GET['ref'];
}
echo "<div id='header_menu'>";
echo " <ul>";
echo " <li><a href='index.php".$reflinkv."'>";
echo " <span class='text-top'>Главная</span>";
echo " <span class='text-bottom'>О нашем проекте</span>";
echo " </a></li>";
echo " <li><a href='index?link=garant".$reflinka."'>";
echo " <span class='text-top'>Гарантии</span>";
echo " <span class='text-bottom'>Вы не потеряете деньги</span>";
echo " </a></li>";
echo " <li><a href='index?link=contacts".$reflinka."'>";
echo " <span class='text-top'>Контаты</span>";
echo " <span class='text-bottom'>Техническая поддержка</span>";
echo " </a></li>";
echo " <li><a href='index?link=help".$reflinka."'>";
echo " <span class='text-top'>Помощь</span>";
echo " <span class='text-bottom'>Вопрос-ответ</span>";
echo " </a></li>";
echo " <li><a href='index?link=rest".$reflinka."'>";
echo " <span class='text-top'>Отдохни</span>";
echo " <span class='text-bottom'>Игры и развлечения</span>";
echo " </a></li>";
echo " </ul>";
echo " </div>";
?>