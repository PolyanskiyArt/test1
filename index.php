<?php
include ("./libs/user/test_reg.php");
if ($_GET['link']=='get_otvet')
include ('./libs/zakaz/get_otvet.php');
if ($_GET['ref'])
$addlink="&ref=".$_GET['ref'];
	$mkeywords="курсовую заказать,контрольную заказать,дипломнцую заказать,реферат заказать";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mdescription="Курсовую курсовая курсовые заказать заказ дипломные дипломную дипломная работа работу контрольная контрольную контрольные реферат рефераты";
	switch ($_GET['link']){
	case "stud_registr": 
	 $cont="./libs/user/stud_reg_form.php";
	$mkeywords="";
	$mdescription="";
	break;
	case "garant": 
	 $cont="./libs/garant/index.php";
	$mkeywords="курсовая,контрольные,дипломные,рефераты,гарантии";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mdescription="Курсовую курсовая курсовые заказать заказ дипломные дипломную дипломная работа работу контрольная контрольную контрольные реферат рефераты гарантии";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";

	break;
	case "help": 
	 $cont="./libs/help/help.php";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая,контрольные,дипломные,рефераты,гарантии,как заказать курсовую,как заказать контрольную";
	$mdescription="Курсовую курсовая курсовые заказать заказ дипломные дипломную дипломная работа работу контрольная контрольную контрольные реферат рефераты помощь";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "how_zakaz": 
	 $cont="./libs/help/how_zakaz.php";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая закзать,контрольная заказать,дипломная заказать,реферат заказать,гарантии";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Как сделать заказ";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "how_avtor": 
	 $cont="./libs/help/how_avtor.php";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая закзать,контрольная заказать,дипломная заказать,реферат заказать,гарантии";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Как сделать заказ";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "rest": 
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая закзать,контрольная заказать,дипломная заказать,реферат заказать,гарантии";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Как сделать заказ";
	 $cont="./libs/rest/rest.php";
	break;
	case "catstat": 
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая закзать,контрольная заказать,дипломная заказать,реферат заказать,гарантии";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Как сделать заказ";
	 $cont="./libs/stat/list_stat.php";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "contacts": 
	 $cont="./libs/contacts/contacts.php";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая,контрольные,дипломные,рефераты,гарантии,контакты";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Контакты";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "avtors": 
	 $cont="./libs/avtors/avtors.php";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "prices": 
	 $cont="./libs/prices/prices.php";
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая цена,контрольные цена,дипломные цена,рефераты цена";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Цены";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "ocenka": 
	 $cont="./libs/zakaz/ocenka.php";
	break;
	case "autorization": 
	 $cont="./libs/user/autorization.php";
	break;
	case "lk": 
	 $cont="./libs/user/lk.php";
	break;
	case "autorized": 
	if ($_SESSION['login'])
	{
	 $cont="./libs/user/test_reg.php";
        $cont_txt="Добро пожаловать, ".$_SESSION['login'];
	}
	else
	{
	$cont_txt= "Пользователь с таким именем и паролем не зарегистрирован. Воспользуйтесь системой регистрации.";
	}
	break;
	case "list_users": 
	 $cont="./libs/user/list_users.php";
	break;
	case "list_partners": 
	 $cont="./libs/user/list_partners.php";
	break;
	case "change_pass": 
	 $cont="./libs/user/change_pass.php";
	break;
	case "list_viplat": 
	 $cont="./libs/user/list_viplat.php";
	break;
	case "list_my_zakazov": 
	 $cont="./libs/zakaz/list_my_zakazov.php";
	break;
	case "obr_change_pass": 
	 $cont="./libs/user/obr/change_pass.php";
	break;
	case "list_avtors": 
	 $cont="./libs/user/list_avtors.php";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";
	break;
	case "validate": 
	 $cont="./libs/user/save_user.php";
	break;
	case "validate_partner": 
	 $cont="./libs/user/partner_save_user.php";
	break;
	case "list_zakazov": 
	 $cont="./libs/zakaz/list_zakazov.php";
	break;
	case "zp_avtor": 
	 $cont="./admin_tools/zp_avtor.php";
	break;
	case "profile": 
	 $cont="./admin_tools/profile.php";
	break;
	case "zp_partner": 
	 $cont="./admin_tools/zp_partner.php";
	break;
	case "list_new_zakaz": 
	 $cont="./admin_tools/list_new_zakaz.php";
	break;
	case "stat": 
	 $cont="./admin_tools/statistika.php";
	break;
	case "schet": 
	 $cont="./libs/user/schet.php";
	break;
	case "zakaz_zp": 
	 $cont="./libs/user/zakaz_zp.php";
	break;
	case "proverka_rabot": 
	 $cont="./admin_tools/proverka_rabot.php";
	break;
	case "editstat": 
	 $cont="./admin_tools/edit_stat.php";
	break;
	case "oplata": 
	 $cont="./libs/zakaz/oplata.php";
	break;
	case "obr_oplata": 
	 $cont="./libs/zakaz/obr/obr_oplata.php";
	break;
	case "file_otvet": 
	 $cont="./libs/zakaz/file_otvet.php";
	break;
	case "zakaz_podrobno": 
	 $cont="./libs/zakaz/zakaz_podrobno.php";
	break;
	case "list_go_zakazov": 
	 $cont="./libs/zakaz/list_go_zakazov.php";
	break;
	case "reg_partner": 
	 $cont="./libs/user/partner_reg_form.php";
	break;
	case "validate_avtor": 
	 $cont="./libs/user/avtor_save_user.php";
	break;
	case "reg_avtor": 
	 $cont="./libs/user/avtor_reg_form.php";
	break;
	case "edit_prifile": 
	 $cont="./libs/user/obr/edit_prifile.php";
	break;
	case "exit": 
	 $cont="./libs/user/exit.php";
	 
	//exit("<meta http-equiv='refresh' content='0; url=$_SERVER[PHP_SELF]?'>");	
	break;
	case "list_zakaz": 
	 $cont="./libs/zakaz/list_zakazov.php";
	break;
	case "zayavka": 
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая цена,контрольные цена,дипломные цена,рефераты цена";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Цены";
	 $cont="./libs/zakaz/form_zayavka.php";
	break;
	case "valid_zayavka": 
	 $cont="./libs/zakaz/valid.php";
	break;
	case "vibor_avtora": 
	 $cont="./admin_tools/vibor_avtora.php";
	break;
	case "del_zakaz": 
	 $cont="./admin_tools/del_zakaz.php";
	break;
	case "list_oplata": 
	 $cont="./admin_tools/list_oplata.php";
	break;
	case "get_otvet": 
	 $cont="./libs/zakaz/get_otvet.php";
	break;
	case "adm_ocenka": 
	 $cont="./admin_tools/adm_ocenka.php";
	break;
	case "statistika": 
	 $cont="./admin_tools/statistika.php";
	break;
	case "game": 
	 $cont="./libs/rest/game.php";
	break;
	default:
	$mtitle="УмСтудента.RU Курсовые дипломные контрольные работы на заказ.";
	$mkeywords="курсовая цена,контрольные цена,дипломные цена,рефераты цена";
	$mdescription="УмСтудента.RU Курсовые дипломные контрольные работы на заказ. Цены";
	$modzakaz="<center><a href='./index.php?link=zayavka&typework=3".$addlink."' class='btn_zakaz'><span> Заказать курсовую </span></a><a href='./index.php?link=zayavka&typework=4".$addlink."' class='btn_zakaz'><span> Заказать дипломную </span></a><a href='./index.php?link=zayavka&typework=2".$addlink."' class='btn_zakaz'><span> Заказать контрольную </span></a><a href='./index.php?link=zayavka&typework=1".$addlink."' class='btn_zakaz'><span> Заказать реферат </span></a></center>";

	 $cont="./libs/news/index.php";
	break;
	}


?>

 <html>
   <head>
     <title><?php echo $mtitle; ?></title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="libs/header/menu/menu.css">
     <link rel="stylesheet" type="text/css" href="libs/menus/left_menu.css">
     <meta name="keywords" content="<?php echo $mkeywords; ?>" />
     <meta name='description' content="<?php echo $mdescription; ?>" />
     <meta name="robots" content="all" />

<?php
if ($_GET["link"]=="zayavka")
{
echo "<link rel='stylesheet' type='text/css' href='libs/zakaz/tcal.css' />";
echo "<script type='text/javascript' src='libs/zakaz/tcal.js'></script> ";

}
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38261670-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?
//print_r($_SESSION);
?>
   </head>
   <body background="./images/bg.png">

<!-- <img id="logo" src='./images/logo.png' style='position: absolute; left:20px; top:40px;'/> ---!>
<div id="main">
<noindex>
<div id="left_menu"><img src="images/logo1.png">

	<?php
	 include "./libs/menus/left_menu.php";
	?>
</div>
</noindex>
<div id="header">
<img src="./images/chel.png" align="right">
<br><br><b><i>Для тех, кто ценит свое время</i></b>

<br>
</div>
<div id="modzakaz">
<?php
echo $modzakaz;
?>

</div>
<div id="content">
<?php
	if ($cont_txt)
	echo $cont_txt;
	if ($cont)
	include($cont);
//	echo session_id();
//	echo"session id: ".$_SESSION['id'];
//	echo"login: ".$_SESSION['login'];
//	echo"type: ".$_SESSION['type'];

	?>
	
</div>

</div>
<body>
</html>
