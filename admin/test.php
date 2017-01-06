<div style="margin-top: 40px;">
	<form action="deletenews1.php" method="post">
<table  border="1">

	<tr>
		
		<td>Название статьи</td>
		<td>Выбрать</td>
		
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
		
		
<?	}while($news = mysql_fetch_object($articles));
	   
?>	



	</table><input type="submit" value="Delete">
	</form>
</div>