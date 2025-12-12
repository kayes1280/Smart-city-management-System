<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup"; // Using the same DB as found in kayes/db.php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
