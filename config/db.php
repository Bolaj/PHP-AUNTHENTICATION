<?php
//Enable us to use headers
ob_start();
//Set Sessions
if(!isset($_SESSION))
{
    session_start();
}
//Define Connection
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mollaz";

$connection = mysqli_connect($hostname, $username, $password, $dbname)
or die("Database connection not established")

?>