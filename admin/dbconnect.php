<?php
//Declare the connection information to database
$db_name = "asm2";
$host_name = "localhost";
$username = "root";
$password = "root";
$db_port = 3306;
//Create the connection to database
$connection = new mysqli($host_name, $username, $password, $db_name, $db_port); 
//Check the connection
if ($connection->connect_error) {
    die($connection->connect_error); //show the specific error
}
?>