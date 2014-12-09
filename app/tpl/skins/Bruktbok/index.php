<?php include_once 'languages/en.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo lang('title'); ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
    <div id="header"> <!--her er header definert-->
    	<div class="wrapper"> <!--er en klasse som definerer en bredde på midtseksjonen vår-->
		
            <a id="logo" href="/"><?php echo lang('title'); ?></a>
		<?php include_once 'includes/menu.php'; ?>
            </div>
       </div>
    <div id="eyeCatcher">
    	<div class="wrapper">
            <div class="column"> <!--definerer klassen kolonnen-->
		<a href="/register.php" style="color:white;"><img src="images/form.png" /><br />
		<h3><?php echo lang('number-one'); ?></h3></a>
		<span style="color: #c7c4c4"><?php echo lang('number-one-text'); ?></span>			
		</div>
		
            <div class="column"> <!--definerer kolonnen-->
		<img src="images/bok.png" /><br />
		<h3><?php echo lang('number-two'); ?></h3>
		<span style="color: #c7c4c4"><?php echo lang('number-two-text'); ?>
		</span> 
            </div>
	    
            <div class="column" style="margin-right: 0;"> <!--definerer kolonnen-->
		<img src="images/hammer.png" /><br />
		<h3><?php echo lang('number-three'); ?></h3>
		<span style="color: #c7c4c4"><?php echo lang('number-three-text'); ?> 
		</span>
            </div>
        </div>
    </div>
	
	<div id="midLine">
	<div class="wrapper">

			<a href="register" id="midButton"></a>
			<p class="text"><?php echo lang('eyecatcher'); ?></p> 
			
			
    </div>	
		</div>
		
	
	<br /><br />

		<div id="footer" style="margin-bottom:30px;"><i><?php echo lang('rights'); ?>
	<a href="contact"><?php echo lang('contact-us'); ?></a> - <a href="terms"><?php echo lang('terms'); ?> </a> - <a href="privacy"><?php echo lang('privacy'); ?></a></i>
    </div>
	
  
    <?php include_once 'includes/login-popup.php'; ?>

	

				
			
</html>
