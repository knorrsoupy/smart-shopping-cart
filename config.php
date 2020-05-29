<?php
define('DB_SERVER', 'ec2-34-232-147-86.compute-1.amazonaws.com');
define('DB_USERNAME', 'ntvwxnohpujldg');
define('DB_PASSWORD', '7e7e88712cf85a9006835b3c113eee73628ff35e463ea7c96f4aee8b97def414');
define('DB_NAME', 'dbhmbk8ogf0ogk');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
