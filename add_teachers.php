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

 
$teacher_name = $_POST['teacher_name'];
$teacher_address = $_POST['teacher_address'];
$teacher_phone = $_POST['teacher_phone'];
$teacher_salary = $_POST['teacher_salary'];
$teacher_bgcheck = $_POST['teacher_bgcheck'];
 
$sql = "INSERT INTO teachers (name, address, phone, salary, background_check) VALUES ('$teacher_name', '$teacher_address', '$teacher_phone', '$teacher_salary', '$teacher_bgcheck')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>