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
        <link rel="stylesheet" href="styles/main.css" />
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
        <h2 style="margin-bottom:13px;">Registrer deg nå</h2>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
       
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            <p style="margin-bottom:3px;">Brukernavn</p> <div class="wrapper-inputs"><input type='text' style="width: 25%;" placeholder="Brukernavn" class="focus"
                name='username' 
                id='username' /><i style="color:#aeaead; font-size: 14px;"> * Skriv inn ønsket brukernavn</i></div>
            <p style="margin-bottom:3px;">E-post </p> <div class="wrapper-inputs"><input type="text" name="email" id="email" style="width: 25%;" placeholder="E-post" class="focus"/><i style="color:#aeaead; font-size: 14px;"> * Bruk en ekte e-post, brukes når du skal logge inn.</i></div>
            Passord <div class="wrapper-inputs"><input type="password" style="width: 25%;" placeholder="Passord" class="focus"
                             name="password" 
                             id="password" /><i style="color:#aeaead; font-size: 14px;"> 
							 * Passordet må inneholde både store og små bokstaver.</i></div>
            <p style="margin-bottom:3px;">Bekreft passord </p> <div class="wrapper-inputs"><input type="password" style="width: 25%;" placeholder="Bekreft passord" class="focus"
                                     name="confirmpwd" 
                                     id="confirmpwd" /><i style="color:#aeaead; font-size: 14px;"> 
									 * Bekreft passordet ditt.</i></div>
            <input type="button" 
                   value="Registrer" style="width: 15%;" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
		
		</div>
		</div><br /><br />
       <div id="footer"><i>Alle rettigheter reservert © 2012 |
	<a href="contact.php">Kontakt oss</a> - <a href="terms.php">Terms of Use </a> - <a href="privacy.php">Privacy</a></i>
    </div>
		 <?php include_once 'includes/login-popup.php'; ?>
		
    </body>
</html>