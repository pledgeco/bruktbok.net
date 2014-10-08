<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
include_once 'languages/no.php';
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
			<?php include_once 'includes/menu.php'; ?></div>
		</div>
      
	  <div class="wrapper">
	 
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
		
		<div class="round-box" style="margin-top:20px;">
		<img src="images/display5.png" style="float:right; width:500px; margin-top:20px; margin-right:60px;">
        <h2 style="margin-bottom:13px;"><?php echo lang('register-header'); ?></h2>
		
		
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
       
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
				
            <p style="margin-bottom:3px;"><?php echo lang('username'); ?></p> <div class="wrapper-inputs"><input type='text' style="width: 25%;" placeholder="<?php echo lang('desc-username'); ?>" class="focus"
                name='username' 
                id='username' /></div>
				
            <p style="margin-bottom:3px;"><?php echo lang('email'); ?> </p> <div class="wrapper-inputs"><input type="text" name="email" id="email" style="width: 25%;" placeholder="<?php echo lang('desc-email'); ?>" class="focus"/></div>
            <?php echo lang('password'); ?> <div class="wrapper-inputs"><input type="password" style="width: 25%;" placeholder="<?php echo lang('desc-password'); ?>" class="focus"
                             name="password" 
                             id="password" /></div>
            <p style="margin-bottom:3px;"><?php echo lang('desc-confirmpwd'); ?> </p> <div class="wrapper-inputs"><input type="password" style="width: 25%;" placeholder="<?php echo lang('confirmpwd'); ?>" class="focus"
                                     name="confirmpwd" 
                                     id="confirmpwd" /></div>
            <input type="button" 
                   value="<?php echo lang('confirm-register'); ?>" style="width: 15%;" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
		
		</div>
		</div><br /><br />
       <div id="footer"><i> <?php echo lang('rights'); ?>
	<a href="contact.php"><?php echo lang('contact-us'); ?></a> - <a href="terms.php"><?php echo lang('terms'); ?> </a> - <a href="privacy.php"><?php echo lang('privacy'); ?></a></i>
    </div>
		 <?php include_once 'includes/login-popup.php'; ?>
		
    </body>
</html>