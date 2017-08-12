<?php  
/*    header('Content-Type: application/x-javascript; charset=utf8');  */
include("./config/db_connect.php");
$date = date('Y-m-d H:i:s');
$query="select id_zakaz FROM zakaz where 0=1 and need_finished-1>='".$date."' ORDER BY need_finished LIMIT 30";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
    $n =  array("id_zakaz" => 1);/*$row['id_zakaz']);  */
    echo json_encode($n);  
?>  