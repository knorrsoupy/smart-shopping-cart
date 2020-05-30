<?php
define('DB_SERVER','https://ab78fdb3fbcf.ngrok.io');
define('DB_USERNAME','soup');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
