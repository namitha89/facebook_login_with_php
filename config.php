<?php
include_once("facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '293415154348790'; //Facebook App ID
$appSecret = '85ec4bd2d81600049f521d32b192163f'; // Facebook App Secret
$homeurl = 'http://localhost/facebook_login_with_php/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>