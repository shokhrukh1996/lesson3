<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
 <?php 
$id = $_GET['head_link']; 
$articles = mysql_query("SELECT * FROM `head_data` WHERE id = $id");
 ?>
        <div id="templatemo_main">
			<?
			while($news = mysql_fetch_object($articles))
			{
			?>     
            <div class="post_section">   
                 <p><?=$news->text;?></p>       
            </div>
            <?	
			}
			?>     
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>