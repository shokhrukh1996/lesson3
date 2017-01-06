<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
			    
<?php 
$categories = mysql_query("SELECT * FROM `categories`");
 ?>

            <ul class="templatemo_list">
			<?
			do
			{
			?>
			<li><a href="edit1.php?cat=<?=$cat->id;?>"><?=$cat->title;?></a></li>
			
			<?
			}while($cat = mysql_fetch_object($categories));
			?>
            </ul>      
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>