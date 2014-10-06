<?php include_once 'languages/no.php'; ?>
<?php
include_once 'includes/psl-config.php';   // As functions.php is not included
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>
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
		<h3>1. Registrer deg</h3></a>
		<span style="color: #c7c4c4">Registreringen tar
			under et minutt. Vi trenger kun litt
			informasjon om deg.</span>			
		</div>
		
            <div class="column"> <!--definerer kolonnen-->
		<img src="images/bok.png" /><br />
		<h3>2. Legg ut bøker</h3>
		<span style="color: #c7c4c4">Du kan selge alle bøker som tilhører UIA i Grimstad og Kristiansand. 
		</span> 
            </div>
	    
            <div class="column" style="margin-right: 0;"> <!--definerer kolonnen-->
		<img src="images/hammer.png" /><br />
		<h3>3. Solgt!</h3>
		<span style="color: #c7c4c4">Når bøkene dine er lagt ut for salg, så er det bare å vente på at noen vil kjøpe dem. 
		</span>
            </div>
        </div>
    </div>
	
	<div id="midLine">
	<div class="wrapper">

			<a href="register.php" id="midButton"></a>
			<p class="text">Selg eller kjøp studiebøker via Bruktbok.net med et par enkle tastetrykk.</p> 
			
			
    </div>	
		</div>
		
	
	<br /><br />

		<div id="footer" style="margin-bottom:30px;"><i>Alle rettigheter reservert © 2012 |
	<a href="contact.php">Kontakt oss</a> - <a href="terms.php">Terms of Use </a> - <a href="privacy.php">Privacy</a></i>
    </div>
	
  
    <?php include_once 'includes/login-popup.php'; ?>

	

				
			
</html>
