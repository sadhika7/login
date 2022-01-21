<?php
	require_once( 'insta.php' );

	$accessToken = 'ACCESS-TOKEN';

	$params = array(
		'get_code' => isset( $_GET['code'] ) ? $_GET['code'] : '',
		'access_token' => $accessToken,
		'user_id' => 'USER-ID'
	);
	$ig = new insta( $params );
?>
<a href="<?php echo $ig->authorizationUrl;?>">
    Authorize with Insta
</a>