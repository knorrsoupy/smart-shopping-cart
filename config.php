<?php
session_start();
/* DATABASE CONFIGURATION */
define('DB_SERVER', "ec2-34-232-147-86.compute-1.amazonaws.com");
define('DB_USERNAME', "ntvwxnohpujldg");
define('DB_PASSWORD', "7e7e88712cf85a9006835b3c113eee73628ff35e463ea7c96f4aee8b97def414");
define('DB_DATABASE', "dbhmbk8ogf0ogk");
$port = "5432";

function getDB()
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}
?>