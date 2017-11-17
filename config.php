<?php
@session_start();
ini_set('display_errors', 1);
define('clientId', '');
define('clientSecret', '');
define('redirectUri', 'http://localhost/instagram-php-sdk/welcome.php');
define('siteUri', 'http://localhost/instagram-php-sdk/');

function prd($string, $noDie =false){
	echo '<pre>';
	print_r($string);
	echo '</pre>';
	if($noDie===false) die;
}
