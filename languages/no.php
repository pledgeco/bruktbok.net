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
		
		// footer
		'contact-us' => 'Kontakt oss',
		'rights' => 'Alle rettigheter reservert © 2014 |',
		'terms' => 'Terms of Use',
		'privacy' => 'Privacy',
		
		//contact form
		'contact-header' => 'Kontakt oss',
		'firstname' => 'Fornavn',
		
    );
    return $lang[$phrase];
}