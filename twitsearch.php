<?php

header('Access-Control-Allow-Origin: *');
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "3772953021-vwwoJk7EXyErhQDgdXBfsw3JtYNsBAnD1ma2HMI",
    'oauth_access_token_secret' => "KKM0UhYo2lHneTGnBYnNXUxjiRwpRmdYZWtsDOmTVpro1",
    'consumer_key' => "8KExdqAtT8WJM4bg3SZETA99p",
    'consumer_secret' => "oK6FcaBnW1KoSPpdYBBlbYBbZ6YQ8ZIUw8YOvlnCwUbrNCsifv"
);
 
$url = "https://api.twitter.com/1.1/search/tweets.json";
$Topic = $_GET['topic'];
$Latitude = $_GET['latitude'];
$Longitude = $_GET['longitude'];
$Radius = $_GET['radius'];
 
$requestMethod = "GET";

$getfield = "?q=%40" . "raptors" . "&geocode=43.6543657,-79.379978," . "1" . "mi";
 
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>