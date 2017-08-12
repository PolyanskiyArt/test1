<?  
//header('Content-Type: application/x-javascript; charset=utf8');  
include("./config/db_connect.php");
$nzakaz=$_GET['nzakaz'];
$query="select * from zakaz where id_zakaz=".$nzakaz;
$result=mysql_query($query);
$row=mysql_fetch_array($result);
    $n =  array("price" => $row['price']);  
    echo json_encode($n);  
?>  