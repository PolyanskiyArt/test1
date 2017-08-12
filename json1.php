<?php  
include("./config/db_connect.php");
$date = date('Y-m-d H:i:s');
$query="select id_zakaz FROM zakaz where price=0 ORDER BY need_finished LIMIT 30";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
    $n =  array("id_zakaz" => $row['id_zakaz']);  
    echo json_encode($n);  
?>  