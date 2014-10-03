<?php
function lang($phrase){
    static $lang = array(
        'title' => 'Bruktbok.net',
		
		// meny
        'home' => 'Hjem',
		'register' => 'Registrer deg',
		'contact' => 'Kontakt oss',
		'login' => 'Logg inn',
		'download' => 'Download', 
		
		// hovedtekst
		
		

    );
    return $lang[$phrase];
}