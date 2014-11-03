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

$_CONFIG['bruktbok']['name'] = 'Bruktbok'; // Hotel's name

$_CONFIG['bruktbok']['desc'] = ''; //Hotel's description 

$_CONFIG['bruktbok']['email'] = 'help@myhotel.net'; //Where the help queries from users are emailed to.@Priv skin

$_CONFIG['bruktbok']['in_maint'] = False; //False if hotel is NOT in maintenance. True if hotel IS in maintenance

$_CONFIG['bruktbok']['motto'] = 'Välkommen till ' . $_CONFIG['bruktbok']['name']; //Default motto users will register with.

$_CONFIG['bruktbok']['credits'] = 50000; //Default number of credits users will register with.

$_CONFIG['bruktbok']['pixels'] = 20000; //Default number of pixels users will register with.

$_CONFIG['bruktbok']['figure'] = 'hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100'; //Default figure users will register with.

$_CONFIG['bruktbok']['web_build'] = '63_1dc60c6d6ea6e089c6893ab4e0541ee0/1760'; //Web_Build

$_CONFIG['bruktbok']['external_vars'] = 'http://habswe.com/swf/external_variables.txt'; //URL to your external vars

$_CONFIG['bruktbok']['external_texts'] = 'http://habswe.com/swf/external_flash_texts.txt'; //URL to your external texts

$_CONFIG['bruktbok']['product_data'] = 'http://habswe.com/client/gamedata/productdata.txt'; //URL to your productdata

$_CONFIG['bruktbok']['furni_data'] = 'http://habswe.com/client/gamedata/furnidata.txt'; //URL to your furnidata

$_CONFIG['bruktbok']['swf_folder'] = 'http://habswe.com/tswf'; //URL to your SWF folder(does not end with a '/')

/*
*
*	Templating management - Pick one of our default styles or make yours by following our examples!
*
*/

#RevCMS has 2 default styles, 'Mango' by dannyy94 and 'Priv' by joopie - Others styles are to come, such as RastaLulz's ProCMS style and Nominal's PhoenixCMS 4.0 style.

$_CONFIG['template']['style'] = 'Bruktbok'; 

/*
*
*	Other topsites.. thing
*
*/

$_CONFIG['thehabbos']['username'] = 'habinme';
$_CONFIG['retro_top']['user'] = 'Kryptos'; 

/*
*
*	Recaptcha management - Fill the information below if you have one, else leave it like that and don't worry, be happy.
*
*/

$_CONFIG['recaptcha']['priv_key'] = '6LcZ58USAAAAABSV5px9XZlzvIPaBOGA6rQP2G43';
$_CONFIG['recaptcha']['pub_key'] = '6LcZ58USAAAAAAQ6kquItHl4JuTBWs-5cSKzh6DD';


/*
*
*	Social Networking stuff
*
*/

$_CONFIG['social']['twitter'] = 'TwitterAccount'; //Hotel's Twitter account

$_CONFIG['social']['facebook'] = 'FacebookAccount'; //Hotel's Facebook account

?>