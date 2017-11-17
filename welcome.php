<?php
require_once 'config.php';
require_once 'vendor/autoload.php';


if(!empty($_SESSION['instagram_access_token'])){
prd($_SESSION);
}
else{
$auth_config = array(
    'client_id'         => clientId,
    'client_secret'     => clientSecret,
    'redirect_uri'      => redirectUri,
    'scope'             => array( 'likes', 'comments', 'relationships' )
);

$auth = new Instagram\Auth( $auth_config );
$_SESSION['instagram_access_token'] = $auth->getAccessToken( $_GET['code'] );
}