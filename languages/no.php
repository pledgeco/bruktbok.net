<?php
function lang($phrase){
    static $lang = array(
	
		//header
        'title' => 'Bruktbok.net',
		
		// menu
        'home' => 'Hjem',
		'register' => 'Registrer deg',
		'contact' => 'Kontakt oss',
		'login' => 'Logg inn',
		'download' => 'Download', 
		
		// menu-loggedin
		'logout' => 'Logg ut', 
		'sell' => 'Selg',
		'buy' => 'Kjøp',
		
		//login
		'newuser' => 'Er du ny her?',
		'login-header' => 'Logg inn',
		'login-username' => 'Brukernavn',
		'login-password' => 'Passord',
		'login-submit' => 'Fortsett',
		'login-register' => 'Registrer deg nå',
		
		//index
		'number-one' => '1. Registrer deg',
		'number-one-text' => 'Registreringen tar under et minutt. Vi trenger kun litt informasjon om deg.',
		'number-two' => '2. Legg ut bøker',
		'number-two-text' => 'Du kan selge alle bøker som tilhører UIA i Grimstad og Kristiansand.',
		'number-three' => '3. Solgt!',
		'number-three-text' => 'Når bøkene dine er lagt ut for salg, så er det bare å vente på at noen vil kjøpe dem. ',
		'eyecatcher' => 'Selg eller kjøp studiebøker via Bruktbok.net med et par enkle tastetrykk.',
		
		// register
		'register-header' => 'Registrer deg nå',
		'username' => 'Brukernavn',
		'desc-username' => 'Skriv inn ønsket brukernavn',
		'email' => 'E-post',
		'desc-email' => 'Bruk en ekte e-post',
		'password' => 'Passord',
		'desc-password' => 'Må inneholde tall, små og store bokstaver.',
		'confirmpwd' => 'Bekreft passord',
		'desc-confirmpwd' => 'Bekreft passordet ditt.',
		'confirm-register' => 'Registrer',
		'code' => 'Skriv inn koden over',
		'already-user' => 'Har du allerede en bruker? Logg inn',
		'here' => 'HER.',
		
		// home (me)
		'mypage' => 'Min side',

		// footer
		'contact-us' => 'Kontakt oss',
		'rights' => 'Alle rettigheter reservert © 2014 |',
		'terms' => 'Terms of Use',
		'privacy' => 'Privacy',
		
		//contact form
		'contact-header' => 'Kontakt oss',
		'firstname' => 'Fornavn',
		
		//search books
		'search-books' => 'Søk etter bøker', 
    );
    return $lang[$phrase];
}