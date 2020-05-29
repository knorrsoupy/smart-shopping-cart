<?php
define('DB_SERVER','localhost');
define('DB_USER','id13048954_root');
define('DB_PASS' ,'admin123');
define('DB_NAME', 'id13048954_products');
$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>