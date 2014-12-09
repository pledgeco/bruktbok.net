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
			<?php include_once 'includes/menu.php'; ?></div>
		</div>
      
	  <div class="wrapper">
	 
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
		
		<div class="round-box" style="margin-top:20px; margin-bottom:15px;">
		<div class="content-right">
		<br /><br />
	 
		
		
		<img src="images/display5.png" style="width:500px;"><br /><br />
		<?php echo lang('already-user'); ?> <a href="#" data-reveal-id="myModal" style="color:#80af11;"><b><?php echo lang('here'); ?></b></a>

		</div>
        <h2 style="margin-bottom:13px;"><?php echo lang('register-header'); ?></h2>
		
		<div id="right">
			<div class="focus">
				<form action="register" method="post">
				<?php if(isset($template->form->error)) { echo '<b><div class="error-alert">'.$template->form->error.'</div></b>'; } ?>
					<p><?php echo lang('username'); ?></p>
					
						<div class="focus">
						<div id="error_email" class="focus"></div>
						<input id="id_email" type="text" class="focus" name="reg_username" style="width: 27%;" placeholder="<?php echo lang('desc-username'); ?>"/>
						</div>
					<p><?php echo lang('email'); ?></p>
						<div class="input-area">
						<div id="error_email" class="errors error-top"></div>
						<input id="id_email" type="text" class="focus" name="reg_email" style="width: 27%;" placeholder="<?php echo lang('desc-email'); ?>"/>
						</div>
					<p><?php echo lang('password'); ?></p>
					
						<div class="input-area">
						<input id="id_password" type="password" class="focus" name="reg_password" style="width: 27%;" placeholder="<?php echo lang('desc-password'); ?>"/>
						<div id="error_password" class="errors error-bottom"></div>
						</div>
					<p><?php echo lang('confirmpwd'); ?></p>
					
						<div class="input-area">
						<input id="id_password" type="password" class="text"  name="reg_rep_password" style="width: 27%;" placeholder="<?php echo lang('desc-confirmpwd'); ?>"/>
						<div id="error_password" class="errors error-bottom"></div>
						</div>
					
					
					
					

						<div class="input-area" style="float:right; margin-right:250px;">
						</div>
						<input type="submit" name="register" class="loginsubmit submit-button button-link button-content" style="height:40px; margin-top:1px; width:16%; margin-bottom:75px;" value="<?php echo lang('confirm-register'); ?>"/>
						
						
						
					</a>
					
				</form>
		
		</div>
		</div><br />
       <div id="footer"><i> <?php echo lang('rights'); ?>
	<a href="contact.php"><?php echo lang('contact-us'); ?></a> - <a href="terms.php"><?php echo lang('terms'); ?> </a> - <a href="privacy.php"><?php echo lang('privacy'); ?></a></i>
    </div>
		 <?php include_once 'includes/login-popup.php'; ?>
		
    </body>
</html>