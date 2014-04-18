<?php
session_start();
require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "theCIOB";
$notweets = 30;
$consumerkey = "vzqphySg7bmzihUk3QjFA";
$consumersecret = "RJiXv0bS0FvNso6liKPKL1ycEQlc2RzEuVVeaO1wCv8";
$accesstoken = "66349240-qam8D4HFGVhRAWRsyyjFlMpSKQwHQzVZ9e9inMjXy";
$accesstokensecret = "irVJVlqqe6uFaWG1R3ku27rCQ973NwtpWu3levZbrmMo8";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>