<?php

$server_address = "";              	//If you connecting remotely to this database you need to set the hostname of your server and you need to allow access to your ip from server
$database_name = "";   	    //Set your database name
$username = "";		    //Set your database username
$password = "";		    //Set database password


// Create connection
$db = new mysqli($server_address, $username, $password, $database_name);
?>

