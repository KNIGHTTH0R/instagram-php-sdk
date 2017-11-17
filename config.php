<?php
@session_start();
ini_set('display_errors', 1);
define('clientId', '4cb5ca8e039945429574b81abe6c5e77');
define('clientSecret', '2aae57d5217448ff8977c397b39731d6');
define('redirectUri', 'http://localhost/abhinav/instagram/welcome.php');
define('siteUri', 'http://localhost/abhinav/instagram/');

function prd($string, $noDie =false){
	echo '<pre>';
	print_r($string);
	echo '</pre>';
	if($noDie===false) die;
}