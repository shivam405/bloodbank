<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

//local use
/*define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bbms');*/

//remote use 
define('DB_SERVER', 'sql6.freemysqlhosting.net');
define('DB_USERNAME', 'sql6425199');
define('DB_PASSWORD', '9bwjUvni8a');
define('DB_NAME', 'sql6425199');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}

?>
