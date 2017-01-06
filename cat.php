<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>
 <?php 
 $id = $_GET['cat'];
$articles = mysql_query("SELECT * FROM `data` WHERE cat = $id");
 ?>
        <div id="templatemo_main">
			<?
			while($news = mysql_fetch_object($articles))
			{
			?>     
            <div class="post_section">
            
                <span class="comment"><a href=""><?=$news->view;?></a></span>
            
                <h2><a href="blog_post.php?id=<?=$news->id;?>"><?=$news->title;?></a></h2>
                
    
            	<?=$news->date;?> | <strong>Author:</strong> <?=$news->author;?> | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <img src="images/templatemo_image_01.jpg" alt="image 1" />
                
                 <p><?=$news->description?></p>
              <a href="blog_post.php?id=<?=$news->id;?>">Continue reading...</a>
			               
            </div>
            <?	
			}
			?>     
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>