<?php
define('DB_SERVER', 'fdb23.awardspace.net');
define('DB_USERNAME', '3370068_qrcode');
define('DB_PASSWORD', 'qwerty1234@');
define('DB_NAME', '3370068_qrcode');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
