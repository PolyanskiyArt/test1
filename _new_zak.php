<?php 
$site="http://umstudenta.ru/index.php";
$host="localhost"; // Сѓ Р±РѕР»СЊС€РёРЅСЃС‚РІР° С…РѕСЃС‚РµСЂРѕРІ СЌС‚РѕС‚ РїР°СЂР°РјРµС‚СЂ РёРјРµРЅРЅРѕ С‚Р°РєРѕР№ 
$user="kate"; //РІР°С€Рµ РёРјСЏ РґР»СЏ РїРѕРґРєР»СЋС‡РµРЅРёСЏ Рє MySQL 
$pass="iol.,mjui"; // Р’Р°С€ РїР°СЂРѕР»СЊ РґР»СЏ РїРѕРґРєР»СЋС‡РµРЅРёСЏ Рє MySQL 
$db_name="mk"; // РРјСЏ СЃРѕР·РґР°РІР°РµРјРѕР№ Р±Р°Р·С‹ РґР°РЅРЅС‹С… 
$db_link = mysql_connect($host, $user, $pass) // РЎРѕРµРґРёРЅРµРЅРёРµ СЃ MySQL 
   or die ("РќРµРІРѕР·РјРѕР¶РЅРѕ РїРѕРґРєР»СЋС‡РёС‚СЊСЃСЏ Рє MySQL");
mysql_select_db ($db_name) // Р’С‹Р±РѕСЂ Р‘Р°Р·С‹ РґР°РЅРЅС‹С… 
   or die ("РќРµРІРѕР·РјРѕР¶РЅРѕ РІС‹Р±СЂР°С‚СЊ Р‘Р” ");
   
if ($_POST['predmet'])
{
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
	$qq1="INSERT INTO zakaz (type_work,predmet,tema,v_ot,v_do,need_finished,file_zadan,status,dop,time_zakaz,id_partner,type_link,txt_link) VALUES('$type_work','$predmet','$tema','$v_ot','$v_do','$need_finished','$uploadfile',0,'$dop','$date','$id_partner','$type_link','$txt_link')";
    $result2 = mysql_query ($qq1);

    // РџСЂРѕРІРµСЂСЏРµРј, РµСЃС‚СЊ Р»Рё РѕС€РёР±РєРё
    if ($result2=='TRUE')
    {
    	echo "mysql_insert_id";
		$nzakaz=mysql_insert_id();
		include ("./libs/zakaz/obr/ocenka.php");
    }
 	else 
 	{
    	echo "false";
    }

}
?>
