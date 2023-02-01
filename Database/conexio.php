<?php
/* Host name of the MySQL server */
$host = 'localhost';
/* MySQL account username */
$user = 'root';
/* MySQL account password */
$passwd = '';
/* The schema you want to use */
$schema = 'cotxes';
/* Connection with MySQLi, OOP-style */
$mysqli = new mysqli($host, $user, $passwd, $schema);
/* Check if the connection succeeded */
if (!is_null($mysqli->connect_error))
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . $mysqli->connect_errno . '<br>';
   echo 'Error message: ' . $mysqli->connect_error . '<br>';
   die();
}


?>
