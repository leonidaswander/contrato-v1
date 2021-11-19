<?php
//include library to get user data browser
require_once('assets/userInfo.php');
$browser = new Wolfcast\BrowserDetection();
$browser->addCustomBrowserDetection('Vivaldi');
$userAgent       = $browser->getUserAgent();
$browserName     = $browser->getName(); 


//function to get user ip
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
		  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = $_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)){
	$user_ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
	$user_ip = $forward;
}
else{
	$user_ip = $remote;
}



//connect to ipstack to get data address
$ch = curl_init('http://api.ipstack.com/'.$user_ip.'?access_key='.$ipstackKey.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);
$api_result = json_decode($json, true);

$DataEstado = $api_result['region_name'];
$DataCidade = $api_result['city'];
$DataLat 	= $api_result['latitude'].' , '.$api_result['longitude'];

$dataContract['name'] 		= $titleWait;
$dataContract['document'] 	= $titleWait;
$dataContract['phone'] 		= $titleWait;
$dataContract['email'] 		= $titleWait;
$dataContract['address'] 	= $titleWait;
$dataContract['uf'] 		= $titleWait;

$dataContract['latitude'] 		= $DataLat;
$dataContract['region_name'] 	= $DataEstado;
$dataContract['city']		 	= $DataCidade;
$dataContract['ip'] 			= $user_ip;
$dataContract['uagent'] 		= $userAgent;
$dataContract['browser'] 		= $browserName;
$dataContract['stateCity'] 		=  $DataCidade.'/'.$DataEstado;