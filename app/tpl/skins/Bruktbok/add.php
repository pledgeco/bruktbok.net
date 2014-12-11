<?php
include_once 'languages/en.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo lang('title'); ?></title>
		<link rel="stylesheet" type="text/css" href="css/register-style.css" />
    </head>
    <body>
	    <div id="header">
		<div class="wrapper"><a id="logo" href="/"><?php echo lang('title'); ?></a>
			<?php include_once 'includes/menu-loggedin.php'; ?></div>
		</div>
      
	  <div class="wrapper">
	 
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
		
		<div class="round-box" style="margin-top:20px; margin-bottom:15px;">
		
		<br /><br />
	 
		
		
        <h2 style="margin-bottom:13px; margin-top:-13px;">Add books</h2>
	     <div id="tab-1-5-1-content">             <div class="progressbar"></div>             <a href="" class="tab-ajax"></a>     </div> 
         <form method="post">  
         
 <input type="submit" class="button" name="newtag" value="Add book" style="width:15%; float:right; margin-right:520px; margin-top:3px;">       
 <input type="text" name="newtag" maxlength="20" style="width:25%; margin-bottom:10px;"/>  <br />

 
<?php     $my_id = $_SESSION['user']['id'];     $fetch_tags = mysql_query("SELECT tag,id FROM user_books WHERE user_id = '".$my_id."' LIMIT 20") or die(mysql_error());     $tags_num = mysql_num_rows($fetch_tags);          if (isset($_POST['remtag']))     {     $do = $_GET['do'];     if($do != "") {     mysql_query("DELETE FROM user_books WHERE id = '".$do."'");     Redirect("me");     }     }     ?>                                    <left> <div style="text-align: left;"> <?php $my_id = $_SESSION['user']['id']; $fetch_tags = mysql_query("SELECT tag,id FROM user_books WHERE user_id = '".$my_id."' LIMIT 20") or die(mysql_error()); 

$do = $_GET['id'];  if (isset($do)) {     mysql_query("DELETE FROM user_books WHERE id = '".$do."'");     header("Location: add"); }       if (isset($_POST['newtag']))     {     $user_id = $_SESSION['user']['id'];     $tag = htmlspecialchars(addslashes($_POST[newtag]));       if (strlen($user_id) < 1 || strlen($tag) < 1)     {     header("Location: me");     }     else     {         mysql_query("INSERT INTO user_books (user_id    ,tag) VALUES ('" . $user_id    . "','" . $tag . "')");     header("Location: add");     }     }     ?>     <div id="tab-3-2-content" >     <div id="my-tag-info" class="habblet-content-info">         <?php if($tags_num > 50){ echo "You have your daily limit, remove some tags to add new ones."; } elseif($tags_num == 0){ echo "You dont have any books yet."; } elseif($tags_num < 50){ echo ""; } ?>    
 </div> <div class="box-content">    
 <div class="habblet" id="my-tags-list"> 

 <u><h4 style="margin-bottom:-19px; margin-top:14px; font-size:18px;">My added books</h4></u>
 
 <?php if($tags_num > 0){ echo "<ul class=\"tag-list make-clickable\"> ";  while($row = mysql_fetch_assoc($fetch_tags)){   
 echo ' <font style="font-size:16px; line-height:25px;"><br />'.strtolower($row["tag"]).'                         <a href="{url}/index.php?url=me&id='.$row["id"].'">

 </a>&nbsp;                 ';     }             echo "</ul>"; } ?>   <?php if($tags_num < 20){ ?>
 </form> <?php } ?>     </div> </div>   
		
<br />
       <div id="footer"><i> <?php echo lang('rights'); ?>
	<a href="contact.php"><?php echo lang('contact-us'); ?></a> - <a href="terms.php"><?php echo lang('terms'); ?> </a> - <a href="privacy.php"><?php echo lang('privacy'); ?></a></i>
    </div>
		 <?php include_once 'includes/login-popup.php'; ?>
		
    </body>
</html>