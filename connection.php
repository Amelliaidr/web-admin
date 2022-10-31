<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bossnanny";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
?>