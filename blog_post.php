<? include "inc/db.php"; ?>

<? include "inc/header.php";?>
<? include "inc/left.php";?>
    
    <div id="templatemo_right_column">
    
  <? include "inc/slider.php";?>

        <div id="templatemo_main">
<?php 
$id = $_GET['id'];

$up = mysql_query("SELECT view  FROM `data`  WHERE id = $id" );
$row = mysql_fetch_array($up);
$new_view = $row['view'] + 1;
$view = mysql_query("UPDATE data SET view = $new_view WHERE id = $id ");


$categories = mysql_query("SELECT * FROM `data` WHERE id = $id");
$news = mysql_fetch_object($categories);
 ?>			    
            <div class="post_section">
            
                <span class="comment"><a href=""><?=$news->view;?></a></span>
            
                <h2><?=$news->title;?></h2>
                
    
            	<?=$news->date;?> | <strong>Author:</strong> <?=$news->author;?> | <strong>Category:</strong> <a href="#">Freebies</a>
                
                <img src="images/templatemo_image_01.jpg" alt="image 1" />
                
                 <p><?=$news->description?></p>
            
			               
            </div>
                 <div class="comment_tab">
           	    Comments           </div>
 <?php 
$comment = mysql_query("SELECT * FROM `comments` WHERE post = $id");
$com = mysql_fetch_object($comment);
 ?>           
      <div id="comment_section">
                <ol class="comments first_level">
                        
                 
                     
<?
if(mysql_num_rows($comment)>0){
	


do{?>                    
                        <li>
                            <div class="comment_box commentbox2">
                                    
                                     
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author 4" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author"><?=$com->name;?><span class="date"><?=$com->date;?></span><span class="time">10:55 AM</span></div>
                                    <p><?=$com->text;?></p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>                      
                                <div class="cleaner"></div>
                            </div>                                              
                        </li>
     <?}while($com = mysql_fetch_object($comment));
     
     }else{
	 	echo"Комментарий пока нет";
	 }
     
     ?>
                    </ol>
                </div>
                
                <div id="comment_form">
                    <h3>Leave a comment</h3>
                    
              		<form action="comment.php" method="post">
                        <div class="form_row">
                            <label><strong>Name</strong> (required)</label>
           					<br />
                            <input type="text" name="name" required />
                        </div>
                        <div class="form_row">
                            <label><strong>Email</strong>  (required, will not be published)</label>
          					<br />
                            <input type="text" name="email" required />
                        </div>
                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="comment" rows="" cols="" required></textarea>
                            
                        </div><input  type="hidden" name="id" value="<?=$id;?>"/>
                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>
                    
                </div>  
          
		</div>
    
  <div class="cleaner"></div>
  </div> 
  <? include "inc/footer.php";?>