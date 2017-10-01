<?php


//$dbServername = "127.0.0.1";
$dbServername = "localhost";
$dbUsername   = "joey";
$dbPassword   = "Oliver2121";
$dbName       = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die("connection failed: " . mysql_connect_error());
}
echo "Connection Success";


?>