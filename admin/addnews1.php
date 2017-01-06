<?php
include "inc/db.php";
$id = $_POST['cat'];
$title = $_POST['title'];
$author = $_POST['aut'];
$desc = $_POST['desc'];
$text = $_POST['text'];
mysql_query("INSERT INTO data(cat,title,author,description,text, date) VALUES ($id, '$title', '$author', '$desc', '$text', NOW())");
header("location:addnews.php")
?>