<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="s3slider.css" rel="stylesheet" type="text/css" />
<!-- JavaScripts-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 1600
        });
    });
</script>

</head>
<body>
<?php 
$menu = mysql_query("SELECT * FROM `head_cat`");
?>
<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
        <ul>
            <?
           while($info = mysql_fetch_object($menu))
            {
            ?>        
            <li><a href="info.php?head_link=<?=$info->id;?>"><?=$info->title;?></a></li>
            <?
            }
            ?>            
        </ul>	

    </div> <!-- end of templatemo_menu -->