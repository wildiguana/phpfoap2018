<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'formacio.obsea.es');
define('DB_USERNAME', 'joseomar');
define('DB_PASSWORD', '');
define('DB_NAME', 'prueba_crud');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    echo "conexion ok";
}
?>