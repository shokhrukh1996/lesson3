<?php 
include "inc/db.php";

$id = $_POST['name'];
$exp = implode(",", $id);

$ress = mysql_query( "select * from data where cat = $exp");
if(mysql_num_rows($ress) > 0){
 echo 'Удалить нельзя';
}else{
$res = mysql_query( "delete  from categories where id IN($exp) ");
header("location:del.php");		
}
?>