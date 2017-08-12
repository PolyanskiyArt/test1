<?php
function f_type_work($type_work)
{
switch($type_work){
case 1:
return 'Реферат';
break;
case 2:
return 'Контрольная';
break;
case 3:
return 'Курсовая';
break;
case 4:
return 'Дипломная';
break;
case 5:
return 'Бизнес-план';
break;
case 5:
return 'Прочее';
break;
}
}
function status($type_status,$nzakaz,$otvet)
{
switch ($type_status)
{
case 0:
return 'Задание оценивается';
break;
case 10:
return 'Работа завершена';
break;
case 1:
return "Цена определена. <a href='index?link=vibor_avtora&nzakaz=".$nzakaz."'>Выбрать автора</a>";
break;
case 2:
return 'Автор выбран';
break;
case 3:
if ($_SESSION['type']==1)
return "Автор ждет <a href='index?link=oplata&nzakaz=".$nzakaz."'>оплаты</a> работы";
else 
return "Студент взял реквизиты для оплаты";
break;
case 4:                             
return 'Подтверждение платежа';
case 5:
if ($_SESSION['type']==1)
{
if ($otvet=='')
return 'Платеж подтвержден. Работа выполняется';
else 
return "<a href='index?link=get_otvet&nzakaz=".$nzakaz."'>Работа выполнена. Скачать</a>";
}
else
{
return 'Работа оплачена. Студент ждет готовую работу';
}
break;               
case 6:
return 'Работа готова';
break;
case 7:
return 'Завершено';
break;
case 8:
return 'Требуется доработка';
break;
}
return '';
}
?>