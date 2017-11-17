<?php
require_once 'config.php';
require_once 'vendor/autoload.php';
$auth_config = array(
    'client_id'         => clientId,
    'client_secret'     => clientSecret,
    'redirect_uri'      => redirectUri,
    'scope'             => array( 'public_content', 'likes', 'comments', 'relationships','follower_list' )
);

$auth = new Instagram\Auth( $auth_config );
$auth->authorize();