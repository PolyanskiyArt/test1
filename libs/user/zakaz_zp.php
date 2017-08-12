<?php
if (($_SESSION['type']==2 OR $_SESSION['type']==3) and $_POST['sposob'])
{
 include ("./config/db_connect.php");
 $sposob=$_POST['sposob'];
echo "sposob=".$sposob;
$date = date('Y-m-d H:i:s');

$query="insert into zp_zapros (type_client,id_client,time_zapros,sposob) VALUES (".$_SESSION['type'].",".$_SESSION['id'].",'".$date."','".$_POST['sposob']."')";
$result=mysql_query($query);
echo "<p>Ваш запрос принят. После его обработки сумма в течение недели с вашего счета будет переведена на указанные вами реквизиты. По любым возникшим вопросам обращайтесь в службу тех поддержки. С уважением, Администрация";
}
?>