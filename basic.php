<?php

$database = 'geolanda';
$user     = 'postgres';
$password = 'iloveJesus';

//include libraries
include("adodb5/adodb-exceptions.inc.php");
include("adodb5/adodb.inc.php");

//make db connection
$db     =       ADONewConnection('postgres');
$db->Connect('localhost:5433',$user,$password,$database);
?>