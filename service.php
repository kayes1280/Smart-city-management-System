<?php
$conn = new mysqli("localhost", "root", "", "signup");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$address = $_POST['address'];
$description = $_POST['description'];

$sql = "INSERT INTO store_data (address, description) 
        VALUES ('$address', '$description')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html?status=success");
    exit;
} else {
    header("Location: index.html?status=error");
    exit;
}
?>
