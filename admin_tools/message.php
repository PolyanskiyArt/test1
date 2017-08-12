<?php
if ($_SESSION['type']==77)
{
include ("./config/db_connect.php");
include ("./admin_tools/functions/txt.php");
$query="select * from messages where gotovo=0";

}
?>
