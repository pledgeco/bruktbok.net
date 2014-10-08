<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
include_once 'languages/no.php';
include_once 'includes/login-popup.php'; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bruktbok.no</title>
	<link rel="stylesheet" type="text/css" href="css/contact-style.css" />
</head>

<body>
    <div id="header"> <!--her er header definert-->
    	<div class="wrapper"> <!--er en klasse som definerer en bredde på midtseksjonen vår-->
            <a id="logo" href="/"><?php echo lang('title'); ?></a>
			<?php include_once 'includes/menu.php'; ?></div>
            </div>
       </div>
    
    <div class="wrapper">
	<div class="round-box" style="margin-top:20px; margin-bottom:30px;">
	<div id="register-page" style="clear: left" class="phase-0 clearfix">
		<div class="phase-0">
			<h2 style="margin-bottom:13px;"><?php echo lang('contact-header'); ?></h2>
				
	 <iframe  id="kart" width="425" style="margin-right:70px; color:white;" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=Universitetet+i+Agder+-+Kristiansand,+Gimlemoen,+Kristiansand&amp;aq=1&amp;oq=Univer&amp;sll=58.066413,8.108806&amp;sspn=1.242133,4.22699&amp;ie=UTF8&amp;hq=Universitetet+i+Agder+-+Kristiansand,+Gimlemoen,+Kristiansand&amp;t=m&amp;ll=58.163107,8.002873&amp;spn=0.006295,0.013228&amp;output=embed"></iframe>
	
		<!-- kart fra google maps-->
					<form method="post" id="phase-0-form" style="margin-top:20px;">
					
					<!--felt fornavn-->
						 
				<p style="margin-bottom:3px;"><?php echo lang('firstname'); ?></p>
			<div class="wrapper-inputs"><input type="text" style="width: 25%;" id="fornavn" name="fornavn" placeholder="Skriv inn fornavn" class="focus"></div>
		</div>
	</div>
			
				<label for="etternavn">Etternavn</label><br />
			<div class="wrapper-inputs"><input type="text" style="width: 25%;" id="etternavn" name="etternavn" placeholder="Skriv inn etternavn" value="" class="focus"></div>
		
		
		
				<label for="email">E-post</label><br />
					<div class="wrapper-inputs"><input type="text" style="width: 25%;" id="email" placeholder="Skriv inn gyldig e-post" name="email" value="" class="focus"></div>
			
				
	
				<label for="telefon">Emne</label><br />
					<div class="wrapper-inputs"><input type="text" style="width: 25%;" id="telefon"  name="telefon" placeholder="Emne" value="" class="focus"> </div>
			

		
				<label for="melding"><b>Melding</b></label><br />
				<p style="float:right; width:494px;"><b>Kontaktinformasjon</b><br />
Universitetet i Agder<br />
Tlf: +  47 98 63 93 73<br />
Support: + 47 98 63 93 73<br />
Epost: support@bruktbok.net<br />
Adresse: Gimlemoen 25, 4630 Kristiansand S
					<div class="wrapper-inputs"><textarea  name="melding" class="focus" placeholder="Skriv meldingen her.." maxlength="1000" cols="25" rows="6" style="   border: 1px solid #DADADA;
    color: #888;
    height: 100px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 25%;
    font-size: 12px;
    line-height:15px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;    
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	resize: none;"></textarea>
				</div>

		<input type="hidden" id="seckey" size="35" name="reg_seckey" value="1234" class="text-field" maxlength="4">
<input type="submit" value=" Send " name="send" id="submit"><!--sende knappen, som sender mailen-->

<?php
//skjemaet er bygd opp fra http://www.freecontactform.com/email_form.php

if(isset($_POST['email'])) {
     
    // Her velger du hvilken adresse som skal motta mailen og hva emne i mailen skal være
    $email_to = "vegard1990@gmail.com";
    $email_subject = "MAIL FRA CHEVIT";
     
     
    function feil($error) {
        // her legger vi inn error koden
        echo "Vi beklager men det oppsto en feil med skjemaet. ";
        die();
    }
     
    // validerer at data finnes
    if(!isset($_POST['fornavn']) ||
        !isset($_POST['etternavn']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefon']) ||
        !isset($_POST['melding'])) {
        feil('Vi beklager, men det oppsto en feil med det du prøvde å sende.');       
    }
    //data fra kontaktskjema 
    $fornavn = $_POST['fornavn']; 
    $etternavn = $_POST['etternavn']; 
    $email_from = $_POST['email']; 
    $telefon = $_POST['telefon']; 
    $melding = $_POST['melding']; 
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {//sjekker om mailen har ugyldige tegn
    $error_message .= 'Mailen din er ikke gyldig..<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$fornavn)) { //sjekker om fornavn har ugyldige tegn
    $error_message .= 'Fornavnet ditt er ikke gyldig..<br />';
  }
  if(!preg_match($string_exp,$etternavn)) { //sjekker om etternavn har ugyldige tegn
    $error_message .= 'Etternavnet ditt er ikke gyldig.<br />';
  }
  if(strlen($melding) < 2) {
    $error_message .= 'Meldingen din er ikke gyldig.<br />';
  }
  if(strlen($error_message) > 0) {
    feil($error_message);
  }
    $email_message = "Mail fra bruker på CHEVIT:\n\n"; //subjectet defineres her
     
    function clean_string($string) { 
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Fornavn: ".clean_string($fornavn)."\n"; //skriver ut det som ble skrevet i formen for fornavn
    $email_message .= "Etternavn: ".clean_string($etternavn)."\n";//skriver ut det som ble skrevet i formen for etternavn
    $email_message .= "Email: ".clean_string($email_from)."\n";//skriver ut det som ble skrevet i formen for email
    $email_message .= "Telefon: ".clean_string($telefon)."\n";//skriver ut det som ble skrevet i formen for telefon
    $email_message .= "Melding: ".clean_string($melding)."\n";//skriver ut det som ble skrevet i formen for melding
     
$headers = 'Fra: '.$email_from."\r\n". // her sender vi ut header, altså fra og til.
'Svar til: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail ($email_to, $email_subject, $email_message, $headers);  
?>

Meldingen din ble sendt. <!--her skrives ut at den er sendt om det var vellykket.-->

<?php
}
?>
</div></div>
<div id="footer"><i> <?php echo lang('rights'); ?>
	<a href="contact.php"><?php echo lang('contact-us'); ?></a> - <a href="terms.php"><?php echo lang('terms'); ?> </a> - <a href="privacy.php"><?php echo lang('privacy'); ?></a></i>
    </div><br /><br />
 
</body>
</html>
