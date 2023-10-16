<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'paiias');


$servername = "localhost";
$username = "root";
$password = "";
$db = "paiias";

// define('DB_USERNAME', 'paiias_formuser');
// define('DB_PASSWORD', 'mdJZFigCS=&$');
// define('DB_NAME', 'paiias_form');
// $servername = "localhost";
// $username = "paiias_formuser";
// $password = "mdJZFigCS=&$";
// $db = "paiias_form";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>