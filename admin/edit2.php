<? include "inc/db.php"; ?>
<? 
$title = $_POST['title'];
 $id = $_POST['id'];  

mysql_query("UPDATE categories SET title = '$title' WHERE id=$id");
header("location:edit.php")




 ?>
