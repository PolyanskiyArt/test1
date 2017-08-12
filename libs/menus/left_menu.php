<ul class="spiski"> 
<?php
if ($_GET['ref']<>0)
$reflink="ref=".$_GET['ref'];
switch($_SESSION['type']){
case 1:
//echo "<li class='ico' id='ico_1'> > <a class='left' href='index.php'>Главная</a></li>"; 
//echo "<li class='ico' id='ico_2'> > <a class='left' href='index.php?link=avtors'>Наши авторы</a></li> ";
//echo "<li class='ico' id='ico_3'> > <a class='left' href='index.php?link=prices'>Цены</a></li> ";
//echo "<li class='ico' id='ico_3'> > <a class='left' href='index.php?link=list_zakaz'>Список текущих заказов</a></li> ";
//echo "<li class='ico' id='ico_4'> > <a class='left' href='index.php?link=garant'>Гарантии</a></li> ";
//echo "  <li class='ico' id='ico_7'> > <a href='index.php?link=how_zakaz&".$reflink."'>Инструкция по заказу</a></li> ";
//echo "  <li class='ico' id='ico_5'> > <a href='index.php?link=zayavka'>Заказать работу</a></li> ";
//echo "  <li class='ico' id='ico_5'> > <a href='index.php?link=contacts'>Обратная связь</a></li> ";
//echo "  <li class='ico' id='ico_5'> > <a class='left' href='index.php?link=lk'>Личный кабинет</a></li> ";
//echo "  <li class='ico' id='ico_5'> > Форум</li> ";
//echo "  <li class='ico' id='ico_5'> > <a class='left' href='index.php?link=exit'>Выход</a></li> ";

break;
case 2:                        //Для авторов
echo "<li >  <a class='left' href='index.php'>Главная</a></li>"; 
//echo "<li lass='ico' id='ico_2'> > Наши авторы</li> ";
echo "<li> <a class='left' href='index.php?link=list_zakazov'>Список свободных заказов</a></li> ";
echo "<li class='ico' id='ico_3'> > <a class='left' href='index.php?link=list_my_zakazov'>Список моих заказов</a></li> ";
//echo "  <li> Гарантии</li> ";
//echo "  <li> Обратная связь</li> ";
echo "  <li > <a class='left' href='index.php?link=schet'>Управление счетом</a></li> ";
echo "  <li > <a class='left' href='index.php?link=list_viplat'>Список выплат</a></li> ";
echo "  <li>  <a class='left' href='index.php?link=lk'>Личный кабинет</a></li> ";
echo "<li > <a class='left' href='index.php?link=how_avtor'>Инструкция автора</a></li> ";
//echo "  <li class='ico' id='ico_5'> > Форум</li> ";
echo "  <li > <a class='left' href='index.php?link=exit'>Выход</a></li> ";

break;
case 3:                         //Для партнеров
echo "<li> <a class='left' href='index.php'>Главная</a></li>"; 
echo "<li> <a class='left' href='index.php?link=avtors'>Наши авторы</a></li> ";
echo "<li> <a class='left' href='index.php?link=prices'>Цены</a></li> ";
echo "  <li> <a class='left' href='index.php?link=garant'>Гарантии</a></li> ";
//echo "  <li>  Обратная связь</li> ";
echo "  <li>  <a class='left' href='index.php?link=lk'>Личный кабинет</a></li> ";
//echo "  <li>  <a class='left' href='index.php?link=autorization'>Вход</a></li> ";
echo "  <li>  <a href='index.php?link=schet'>Управление счетом</a></li> ";
echo "  <li>  <a class='left' href='index.php?link=list_viplat'>Список выплат</a></li> ";
//echo "  <li>  Форум</li> ";
//echo "  <li>  <a class='left' href='index.php?link=stud_registr'>Регистрация</a></li> ";
echo "  <li>  <a class='left' href='index.php?link=exit'>Выход</a></li> ";


case 4:                         //Для партнеров
//echo "<li > > <a class='left' href='index.php'>Главная</a></li>"; 
//echo "<li> > <a class='left' href='index.php?link=avtors'>Наши авторы</a></li> ";
//echo "<li> > <a class='left' href='index.php?link=prices'>Цены</a></li> ";
//echo "  <li> > <a class='left' href='index.php?link=garant'>Гарантии</a></li> ";
//echo "<li 3'> > <a class='left' href='index.php?link=list_zakazov'>Список свободных заказов</a></li> ";
//echo "  <li 5'> > Обратная связь</li> ";
//echo "  <li 5'> > <a class='left' href='index.php?link=lk'>Личный кабинет</a></li> ";
//echo "  <li 5'> > <a class='left' href='index.php?link=autorization'>Вход</a></li> ";
//echo "  <li 5'> > <a href='index.php?link=schet'>Управление счетом</a></li> ";
//echo "  <li 5'> > Форум</li> ";
//echo "  <li 5'> > <a class='left' href='index.php?link=stud_registr'>Регистрация</a></li> ";
//echo "  <li 5'> > <a class='left' href='index.php?link=exit'>Выход</a></li> ";

break;
case 77:
echo "<li > > <a href='index.php?link=stat'>Статистика</a></li>"; 
echo "  <li 5'> > <a href='index.php?link=list_oplata'>Оплата студентов</a></li> ";
echo "  <li 5'> > <a href='index.php?link=list_new_zakaz'>Список новых заказов</a></li> ";
echo "  <li 5'> > <a href='index.php?link=proverka_rabot'>Готовые работы</a></li> ";
echo "  <li 5'> > <a href='index.php?link=vibor_avtora'>Выбор автора</a></li> ";
echo "  <li 5'> > <a href='index.php?link=zp_avtor'>Запросы зп авторов</a></li> ";
echo "  <li 5'> > <a href='index.php?link=zp_partner'>Запросы зп партнеров</a></li> ";
echo "  <li 5'> > <a href='index.php?link=list_avtors'>Список авторов</a></li> ";
echo "  <li 5'> > <a href='index.php?link=list_partners'>Список партнеров</a></li> ";
echo "  <li 5'> > <a href='index.php?link=stat'>Список статей</a></li> ";
//echo "  <li 5'> > Форум</li> ";
//echo "  <li> > <a href='index.php?link=stud_registr'>Регистрация</a></li> ";
echo "  <li> > <a href='index.php?link=exit'>Выход</a></li> ";

break;
default:
echo "<li >  <a href='index.php?".$reflink."'>Главная</a></li>"; 
echo "<li>  <a class='left' href='index.php?link=avtors&".$reflink."'>Наши авторы</a></li> ";
echo "<li>  <a class='left' href='index.php?link=prices&".$reflink."'>Цены</a></li> ";
echo "  <li> <a class='left' href='index.php?link=garant&".$reflink."'>Гарантии</a></li> ";
echo "  <li> <a href='index.php?link=zayavka&".$reflink."'>Заказать работу</a></li> ";
echo "  <li> <a href='index.php?link=reg_avtor&".$reflink."'>Стать автором</a></li> ";
echo "  <li> <a href='index.php?link=reg_partner&".$reflink."'>Стать партнером</a></li> ";
echo "  <li> <a href='index.php?link=how_zakaz&".$reflink."'>Как заказать?</a></li> ";
echo "<li>  <a class='left' href='index.php?link=contacts&".$reflink."'>Контакты</a></li> ";
echo "  <li>  <a href='index.php?link=autorization'>Вход</a></li> ";
//echo "  <li 9'>  <a href='index.php?link=stud_registr&".$reflink."'>Регистрация</a></li> ";

break;

}
?>
</ul>