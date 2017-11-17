<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

try{
	if(isset($_SESSION['instagram_access_token'])){
		$instagram = new Instagram\Instagram( $_SESSION['instagram_access_token'] );
	}
	else{
		header('location:'.siteUri.'login.php');
	}

	 if(isset($_REQUEST['user_name'])){
		$user = $instagram->getUserByUsername( trim($_REQUEST['user_name']) );

		//$user = $instagram->getUser( '6439101654' );
		$current_user = $instagram->getCurrentUser();
		$unfollow = $current_user->unfollow( $user );
		if((int) $unfollow > 0)
			echo 'user unfollowed successfully ';
		else
			echo 'some error occure';
	 }
	 else{
		echo 'Please provide "user_name" ';
	 }


}
catch(Exception $e){
	echo $e->getMessage();
}