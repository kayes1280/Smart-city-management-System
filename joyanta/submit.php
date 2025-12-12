<?php
    include("db.php");
    
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die("405 Method Not Allowed");
    }
    $name = trim($_POST['name']);
    $email= trim($_POST['email']);
    $service= trim($_POST['service']);
    $description= trim($_POST['description']);

    // final validation 

    if($name == "" || $email == "" || $service == "" || strlen($description)<10){
        echo "Invalid data!";
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email";
        exit;
    }

    // prepared statement(for safe)
    $stmt = $conn->prepare( "INSERT INTO complaints (name,email,service,description) VALUES (?,?,?,?)");

    $stmt->bind_param("ssss", $name,$email,$service, $description);
    // execute
    if($stmt->execute()){
        echo "Complaint submitted successfully.";
    }
    else {
        echo "Something went wrong!".$stmt->error;
    }

?>
