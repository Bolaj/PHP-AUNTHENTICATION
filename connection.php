<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mollaz";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("Failed to Connect");
}

