<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
			    
<form action="addnews1.php" method="post">
<table align="center" >
	
	<tr>
		<td>Title</td>
		<td><input  type="text" name="title" value=""/></td>
		</tr>

		<tr>
		<td>Author</td>
		<td><input  type="text" name="aut" value=""/></td>
		
	</tr>
		<tr>
		<td>Description</td>
		<td><input  type="text" name="desc" value=""/></td>
	</tr>

	</tr>
		<tr>
		<td>Text</td>
		<td><textarea name="text" rows="5" cols="30"></textarea>
	</tr>	
	
			<tr>
		<td>выберите</td>
		<td>
		<select name="cat">
<?$res = mysql_query( "select * from categories");
?>
<?	$row = mysql_fetch_object($res);
	do{?>	
	
		<option value="<?=$row->id;?>"><?=$row->title;?></option>
		
<?	}while($row = mysql_fetch_object($res));				
?>	
		</select>
			</tr>

	</tr>	
		<td><input  type="submit"  value="Submit"/></td>
	</tr>	

		</table>
		</form>

  
               
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>