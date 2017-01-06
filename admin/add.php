<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
			    
<div style="margin-top: 40px;">
	<form action="add1.php" method="post">
<table align="center" border="1">

	<tr>
		<td>Введите название.</td>
		<td><input  type="text" name="name" value=""/></td>
		
	</tr>
		<tr>
		
		<td colspan="2">
		<input  type="submit" value="Add"/></td>
		
	</tr>
	</table>
	</form>
</div>

  
               
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>