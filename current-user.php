<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

try{
	$instagram = new Instagram\Instagram( $_SESSION['instagram_access_token'] );
	//$method = get_class_methods($instagram);
	//prd($method);
	//$userId 	=	$instagram->getId();
	//$user = $instagram->getUser( $user_id );
	//$media = $instagram->getMedia( $media_id );
	//$tag = $instagram->getTag( 'mariokart' );
	//$location = $instagram->getLocation( 3001881 );

	//$userByUserName = $instagram->getUserByUsername( 'keshavjangid2269' );
	//prd($userByUserName);
	$current_user = $instagram->getCurrentUser();
	$data = $current_user->getData();
	$user = $instagram->getUser( '6439101654' );
	//prd($userId, 1);
	prd($current_user);
}
catch(Exception $e){
	echo $e->getMessage();
}