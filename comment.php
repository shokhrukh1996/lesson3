<?php
include "inc/db.php";
$id = $_POST['id'];
$name = $_POST['name'];
$em = $_POST['email'];
$text = $_POST['comment'];
mysql_query("INSERT INTO comments (post, author, text, email,date) VALUES ($id,'$name','$text','$em', NOW())" );
header("location:blog_post.php?id=$id");
?>