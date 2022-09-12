<?php
/* Lets assume our MYSQL server details is in default 
setting meaning both 
username and password has not been changed or reset
 */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'university');
 
/* The code below help to make the connection with our database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
/* When the connection could not be made*/
if($link === false){
    die("ERROR:Connection could not be made;Please check your parameters. " . mysqli_connect_error());
}
?>