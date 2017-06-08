<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="users";
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: ");
} 


?>