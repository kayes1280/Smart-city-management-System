<?php
include 'db.php';

// Alter the users table to increase the password column size
$sql = "ALTER TABLE users MODIFY password VARCHAR(255) NOT NULL";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Password column updated successfully!'); window.location.href='login.html';</script>";
} else {
    echo "Error updating password column: " . $conn->error;
}

$conn->close();
?>
