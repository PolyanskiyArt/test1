<h2><center>Оформление заказа</center></h2>
 <style type="text/css">
TEXTAREA{
    border: 1px solid #00F; /* Исходная рамка вокруг поля */
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
}
SELECT {
    border: 1px solid #00F; /* Исходная рамка вокруг поля */
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;

}
   INPUT {
    border: 1px solid #00F; /* Исходная рамка вокруг поля */
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
cursor: pointer;
   }
   INPUT:focus {
    border: 1px solid #39c; /* Рамка при получении фокуса */
   }
.btn{
height:30px;
width:300px;
background:#CCF;
font-size:18px;
color:#00F;
}
</style>

<script>
function change_link()
{
 var type = document.getElementById("type_link").value;
 if (type==1)
 txt = "Укажите адрес вашей страницы ВКонтакте:";
 if (type==2)
 txt = "Укажите ваш номер ICQ:";
 if (type==3)
 txt = "Укажите ваш скайп:";
 if (type==4)
 txt = "Укажите адрес вашей страницы в одноклассниках:";
 if (type==5)
 txt = "Укажите адрес вашей электронной почты:";
 document.getElementById("lbl_txtlink").innerHTML=txt;

}
</script>
<?php
if ($_GET['ref']<>0)
$ref=$_GET['ref'];
if ($_GET['typework']<>0)
$typework=$_GET['typework'];
echo "<center><form enctype='multipart/form-data' action='index.php?link=valid_zayavka&ref=".$_GET['ref']."' method='POST'>";
echo "<table  class='tbl' border='0'>";
echo "<tr><th>Реквизит заказа</th><th>Значение</th></tr>";
echo "<tr width='100px' bgcolor='#DDD'><td>";
echo "    Выберите тип работы:</td><td><select name='type_work' style='width: 160px'>";
echo "    <option value=1 ";
if ($typework==1) echo " selected='selected'";
echo ">Реферат</option>";
echo "    <option value=2 ";
if ($typework==2) echo " selected='selected'";
echo ">Контрольная</option>";
echo "    <option value=3 ";
if ($typework==3) echo " selected='selected'";
echo ">Курсовая</option>";
echo "    <option value=4 ";
if ($typework==4) echo " selected='selected'";
echo ">Дипломная</option>";
echo "    <option value=5>Бизнес-план</option>";
echo "    <option value=6>Другое</option>";
echo "</select></td>";
echo "</tr><tr bgcolor='#eee'><td>Предмет: </td><td><input name='predmet' type='text'></td>";
echo "";
echo "</tr><tr bgcolor='#ddd'><td>Тема работы:</td><td> <input name='tema' type='text'>";
echo "</td>";
echo "</tr><tr bgcolor='#eee'><td>Объем работы (в листах А4): </td><td>От <input name='v_ot' type='text' size='3'> - До <input name='v_do' type='text' size='3'>";
echo "</td>";

echo "</tr><tr bgcolor='#ddd'><td> Когда вам нужно получить работу:</td><td> <input type='text' name='need_finished' class='tcal' value='' />";
echo "</td></tr><tr bgcolor='#eee'><td>Дополнительная информация:</td><td> <textarea name='dop' rows='5' cols='50'></textarea>";
echo "</td>";
echo "</td></tr><tr bgcolor='#ddd'><td>    Прикрепить файл(с заданием/требованиями и т.п.)</td><td><input type='hidden' name='MAX_FILE_SIZE' value='30000000' />";
echo " <input name='userfile' type='file'size='41' /></td></tr>";

echo "<tr width='100px' bgcolor='#eee'><td>";
echo "    Куда вам выслать готовую работу:</td><td><select name='type_link' id='type_link' style='width: 200px' onchange='change_link()'>";
echo "    <option value=1>Сообщением ВКонтакте</option>";
echo "    <option value=2>Сообщением в ICQ</option>";
echo "    <option value=3>В скайп</option>";
echo "    <option value=4>Сообщением в одноклассниках</option>";
echo "    <option value=5>На электронную почту</option>";
echo "</select></td></tr>";
echo "<tr bgcolor='#ddd'><td> <label id='lbl_txtlink'>Укажите адрес вашей страницы ВКонтакте:</label></td><td> <input type='text' name='txt_link' value='' size='50'/>";
echo " </table>";
echo "  <br> <input type='submit' class='btn' value='Заказать работу' /></center></form></center>";     
?>
