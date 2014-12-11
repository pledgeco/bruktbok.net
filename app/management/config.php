<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }

#Please fill this all out.

/*
*
*	MySQL management
*
*/

$_CONFIG['mysql']['connection_type'] = 'pconnect'; //Type of connection: It must be connect, or pconnect: if you want a persistent connection.

$_CONFIG['mysql']['hostname'] = 'localhost'; //MySQL host

$_CONFIG['mysql']['username'] = 'yourmysqluser'; //MySQL username

$_CONFIG['mysql']['password'] = 'typeinpassword'; //MySQL password

$_CONFIG['mysql']['database'] = 'yourdatabase'; //MySQL database

$_CONFIG['mysql']['port'] = '3306'; //MySQL's port

/*
*
*	Website management  - All URLs do not end with an "/"
*
*/

$_CONFIG['bruktbok']['server_ip'] = 'localhost'; //IP of VPS/DEDI/etc

$_CONFIG['bruktbok']['url'] = 'http://bruktbok.net'; //Does not end with a "/"

$_CONFIG['bruktbok']['name'] = 'Bruktbok'; // website name

$_CONFIG['bruktbok']['desc'] = ''; //

$_CONFIG['bruktbok']['email'] = 'help@myhotel.net'; //Where the help queries from users are emailed to.

$_CONFIG['bruktbok']['in_maint'] = False; //maintenance status (false or true)



/*
*
*	Templating management - Pick one of our default styles or make yours by following our examples!
*
*/

$_CONFIG['template']['style'] = 'Bruktbok'; 


?>