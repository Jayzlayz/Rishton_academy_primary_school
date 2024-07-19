<?php
$servername = "localhost";
$username = "root"; 
$password = "password";
$dbname = "school_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO pupils (pupil_name, address, medical_information, email, class_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $pupil_name, $address, $medical_information, $email, $class_id);

// Set parameters and execute
$pupil_name = $_POST['pupil_name'];
$address = $_POST['address'];
$medical_information = $_POST['medical_information'];
$email = $_POST['email'];
$class_id = $_POST['class_id'];

if ($stmt->execute()) {
    echo "New pupil added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>