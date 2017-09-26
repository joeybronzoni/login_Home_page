<?php

$dbServername = "localhost";
$dbUsername   = "";
$dbPassword   = "";
$dbName       = "login_system";

$conn =
      mysqli_connect(
          $dbServername,
          $dbUsername,
          $dbPassword,
          $dbName );
if (!$conn){
    die("connection failed: " . mysql_connect_error());
}
echo "Connection Success";


?>