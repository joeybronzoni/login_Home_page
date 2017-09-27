<?php


$dbServername = "127.0.0.1";
//$dbServername = "localhost";
$dbUsername   = "";
$dbPassword   = "";
$dbName       = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die("connection failed: " . mysql_connect_error());
}
echo "Connection Success";


