<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
<?  $id = $_GET['cat'];   ?>
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
 <?$res = mysql_query( "select * from categories where id=$id");
 $row = mysql_fetch_object($res);
 ?>
 
 <form action="edit2.php" method="post">
<table>
<tr>
 <input type="text" name="title" value="<?=$row->title;?>"/>
 <input  type="hidden" name="id" value="<?=$id;?>"/>
 <input  type="submit" value="edit"/></td>		    
</tr>
	</table>
	</form>
  
               
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>