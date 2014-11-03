<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
#Please fill this all out.

#NOTE: To set up TheHabbos.ORG's API go to wwwroot/mysite/thehabbos_api for IIS, OR, htdocs/thehabbos_api for XAMPP and others.

/*
*
*	MySQL management
*
*/

$_CONFIG['mysql']['connection_type'] = 'pconnect'; //Type of connection: It must be connect, or pconnect: if you want a persistent connection.

$_CONFIG['mysql']['hostname'] = 'localhost'; //MySQL host

$_CONFIG['mysql']['username'] = 'root'; //MySQL username

$_CONFIG['mysql']['password'] = 'Kld8nejduHdje33nY7dJJ0'; //MySQL password

$_CONFIG['mysql']['database'] = 'bruktbok'; //MySQL database

$_CONFIG['mysql']['port'] = '3306'; //MySQL's port

/*
*
*	Hotel management  - All URLs do not end with an "/"
*
*/

$_CONFIG['bruktbok']['server_ip'] = 'localhost'; //IP of VPS/DEDI/etc

$_CONFIG['bruktbok']['url'] = 'http://bruktbok.net'; //Does not end with a "/"

$_CONFIG['bruktbok']['name'] = 'Bruktbok'; // website name

$_CONFIG['bruktbok']['desc'] = ''; //

$_CONFIG['bruktbok']['email'] = 'help@myhotel.net'; //Where the help queries from users are emailed to.@Priv skin

$_CONFIG['bruktbok']['in_maint'] = False; //False if hotel is NOT in maintenance. True if hotel IS in maintenance



/*
*
*	Templating management - Pick one of our default styles or make yours by following our examples!
*
*/

#RevCMS has 2 default styles, 'Mango' by dannyy94 and 'Priv' by joopie - Others styles are to come, such as RastaLulz's ProCMS style and Nominal's PhoenixCMS 4.0 style.

$_CONFIG['template']['style'] = 'Bruktbok'; 

/*


?>