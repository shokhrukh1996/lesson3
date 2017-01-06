<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
			    
<div style="margin-top: 10px;">
	<form action="deletenews1.php" method="post">
<table  border="1">
	<tr>		
		<td><strong>Название статьи</strong></td>
		<td><strong>Выбрать</strong></td>		
	</tr>

	<?
	$articles = mysql_query("SELECT * FROM `data`");
	$news = mysql_fetch_object($articles);
	do{
	?>	

	<tr>
		<td><?=$news->title;?></td>
		<td><input  type="checkbox" name="name[]" value="<?=$news->id;?>"/></td>
	</tr>	
		
<?	}while($news = mysql_fetch_object($articles));?>	

	</table><input type="submit" value="Delete">
	</form>
</div>

		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>