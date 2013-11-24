<?php

require_once("facebook-sdk/facebook.php");

$config = array(
    'appId' => '552609414832678',
    'secret' => 'f2c42a5725aa8950eb242c789e47a1d9',
    'fileUpload' => false, // optional
    'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
);

$facebook = new Facebook($config);

// get the user id, returns 0 if not loggged in 
//$facebook->getUser();
$myMessage = 'Hello';
if ($facebook->api('me/feed', 'post', array('message' => $myMessage))) {
    echo "Message posted";
} else {
    echo "Error occured";
};