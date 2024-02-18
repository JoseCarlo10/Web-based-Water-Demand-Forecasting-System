<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "lwua";  //database

// Create connection
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if(!$db){
	echo "cannot connect to the database";
	exit;
}