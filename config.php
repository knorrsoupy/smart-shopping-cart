<?php
define('DB_SERVER',' sql304.unaux.com');
define('DB_USERNAME','unaux_25898807');
define('DB_PASSWORD', 'qpmw4kn1l');
define('DB_NAME', ' unaux_25898807_project');
define('DB_PORT','3306');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,DB_PORT);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
