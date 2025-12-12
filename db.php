<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint_system"; // Using the same DB as found in kayes/db.php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
