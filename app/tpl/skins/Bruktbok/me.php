<?php include_once 'languages/no.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bruktbok.no</title>
	<link rel="stylesheet" type="text/css" href="css/mypage-style.css" />
</head>

<body>
    <div id="header"> <!--her er header definert-->
    	<div class="wrapper"> <!--er en klasse som definerer en bredde på midtseksjonen vår-->
		
		
            <a id="logo" href="/"><?php echo lang('title'); ?></a>
			<?php include_once 'includes/menu-loggedin.php'; ?>
		</div>
	</div>
</div>

	<div class="wrapper"><!--definerer bredden-->
	<div class="round-box" style="width:340px; float:right; overflow:hidden; display:inline; margin-top:0px; font-size:14px;"><h2 style="margin-bottom:16px;">Din konto</h2>
	
		Bruker-ID: {id} <br />
	  Brukernavn: {username} <br />
	  E-post: {email} <br />
	  Passord: Kryptert <br /><br />
	  <font style="color:#d6d6d6; font-size:14px; margin-top:30px;">Endre kontoinnstillinger »</font>
	
	</div>
	
	
	
	<div class="round-box" style="margin-top:20px; margin-bottom:15px; width:500px;"><h2 style="margin-bottom:21px; font-size:21px;">
	<?php echo lang('mypage'); ?></h2>
	<a href="sell.php" id="button-sell"></a> <!--knapp for å selge bøker-->
		<a href="search.php" id="button-search"></a> <!--knapp for å finne bøker-->
	<br /> <br /><br /><br /><br>

	<h4 style="margin-bottom:5px; font-size:18px;">Velkommen til ditt hjemområde!</h4> <!--Overskrift hjemområde-->
		<p style="color:#d6d6d6;">Her kan du både selge og kjøpe andre sine bøker ved UIA i Grimstad og Kristiansand.</p> <!--definerer farge på teksten-->
			<br />
			
	<h4 style="margin-bottom:5px; font-size:18px;">Legge ut en bok?</h4> <!--under-header-->
		<p style="color:#d6d6d6;">Hvis du vil selge en eller flere bøker, så trykker du på "Legg ut en bok" og følger oppsettet for å legge ut din bok. Når du har gjort dette, så vil<!--definerer farge på teksten-->
					  boken eller bøkene dine bli listet opp på høyre side. Her kan du også redigere og slette bøker du har lagt ut.</p> <br />

	<h3 style="margin-bottom:5px; font-size:18px;">Finne en bok?</h3><!--under-header-->
		<p style="color:#d6d6d6;">Om du er ute etter å finne en bok for ditt semester, så kan du trykke på "Finn en bok". Her vil det komme opp et søkefelt som du kan fylle inn dine kriterier. <!--definerer farge på teksten-->
				          Om du finner den boken du er ute etter, så er det bare å kontakte eieren for å avtale pris.
			</p>	
	</div>
	
	<div class="round-box" style="margin-top:-316px; width:340px; float:right;"><h2 style="margin-bottom:16px; font-size:21px;">Mine bøker</h2>
	<font style="font-size:14px;">Her er en oversikt over dine bøker. Trykk på dem for endre status eller endre bok/forfatter.</font><br /><br />
	  <div class="round-box" style="width:320px; background-color:#7b7d7a; padding:10px; color:#f0eeee; font-size:14px; line-height: 90%; margin-bottom:14px;">
	
	 <strong style="color:#242424;">Bok:</strong> Metode- og oppgaveskriving for studenter<br /><br /> <strong style="color:#242424;">Forfatter:</strong> Olav Dalland <br /><br />
	  
	 <strong style="color:#242424;">Status:</strong> Ikke solgt<br />
	 
	</div>
	<div class="round-box" style="width:320px; background-color:#7b7d7a; padding:10px; color:#f0eeee; font-size:14px; line-height: 90%; margin-bottom:14px;">
	
	 <strong style="color:#242424;">Bok:</strong> Metode- og oppgaveskriving for studenter<br /><br /> <strong style="color:#242424;">Forfatter:</strong> Olav Dalland <br /><br />
	  
	 <strong style="color:#242424;">Status:</strong> Ikke solgt<br />
	 
	</div>
	
	
	</div>
		
			<!--design strek-->
				
	

		
		
	
	
	
</div><!--stenger wrapperen-->

</body>
</html>
