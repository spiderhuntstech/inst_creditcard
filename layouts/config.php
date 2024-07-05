<?php

define('DB_SERVER', 'db-mysql-nyc3-00281-do-user-16900411-0.a.db.ondigitalocean.com');
define('DB_USERNAME', 'doadmin');
define('DB_PASSWORD', 'AVNS_9dgqKkRWMnOWR4xcEAI');
define('DB_NAME', 'defaultdb');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$gmailid = '';
$gmailpassword = ''; 
$gmailusername = ''; 

?>