
    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
<?php 
$categories = mysql_query("SELECT * FROM `categories`");
 ?>
            <h4>Categories</h4>
            <ul class="templatemo_list">
			<?
			do
			{
			?>
			<li><a href="cat.php?cat=<?=$cat->id;?>"><?=$cat->title;?></a></li>
			
			<?
			}while($cat = mysql_fetch_object($categories));
			?>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Premium Themes</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->