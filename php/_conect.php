<?php

$server 	= 'localhost';
$user 		= 'root';
$pass 		= '';
$db 		= 'git-test';
 
$mysqli = new mysqli($server, $user, $pass, $db);

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

mysqli_set_charset($mysqli,"utf8");


 