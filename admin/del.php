<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
			    
<div style="margin-top: 40px;">
	<form action="del1.php" method="post">
<table  border="1">

	<tr>
		
		<td>Категории</td>
		<td>Выбрать</td>
		
	</tr>
	
	
	<?
	
	$res = mysql_query( "select * from categories");
	$row = mysql_fetch_object($res);
	do{
		
	?>	
	
	<tr>
		
		<td><?=$row->title;?></td>
		<td><input  type="checkbox" name="name[]" value="<?=$row->id;?>"/></td>
		
	</tr>	
		
		
<?	}while($row = mysql_fetch_object($res));
	   
?>	



	</table><input type="submit" value="Delete">
	</form>
</div>

  
               
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>