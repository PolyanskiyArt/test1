<?php
if ($_SESSION['type']==1)
{
include ("./config/db_connect.php");
$nzakaz=$_GET['nzakaz'];
$id_stud=$_SESSION['id'];
$query="select * from zakaz where oplachen=1 and id_student=".$id_stud." and id_zakaz=".$nzakaz;
//echo $query;
$result=mysql_query($query);
if ($result)
{
$row=mysql_fetch_array($result);
$file=$row['file_otvet'];
//header ("Content-Type: application/octet-stream");

header ("Accept-Ranges: bytes");

header ("Content-Length: ".filesize($file)); 

header ("Content-Disposition: attachment; filename=".$file);  
$date = date('Y-m-d H:i:s');
$query="UPDATE zakaz SET time_get='".$date."' where oplachen=1 and id_zakaz=".$nzakaz;
$result=mysql_query($query);
readfile($file);
}
}
?>