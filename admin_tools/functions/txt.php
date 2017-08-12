<?php
function txt($type, $n_zakaz)
{
switch $type
{
case 1:
return "Ваш заказ №".$n_zakaz." был оценен авторами. Предложения авторов можете просмотреть в своем личном кабинете по ссылке www.umstudenta.ru/index.php?link=lk";
break;
case 2:
return "Заказ №".$n_zakaz." был оплачен студентом. Он ждет готовую работу. Список ваших заказов можете просмотреть в своем личном кабинете по ссылке www.umstudenta.ru/index.php?link=lk";
break;
}
}
?>