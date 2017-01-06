<?php
include "inc/db.php";
$nam = $_POST['name'];
mysql_query("INSERT INTO categories SET title = '$nam'");
header("location:add.php")
?>