<?php
include "db.php";

$id = $_GET['id'];
$status = $_GET['status'];

$allowed = ['pending', 'accepted', 'rejected'];

if(!in_array($status, $allowed)){
    die("Invalid Status!");
}

$stmt = $conn->prepare("UPDATE complaints SET status=? WHERE id=?");
$stmt->bind_param("si", $status, $id);

$stmt->execute();

header("Location: admin_complaints.php");
exit;
?>
