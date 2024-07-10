<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'inst_creditcard');
define('DB_PASSWORD', 'inst_creditcard');
define('DB_NAME', 'inst_creditcard');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$gmailid = '';
$gmailpassword = ''; 
$gmailusername = ''; 

?>
