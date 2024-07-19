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

 
$teacher_id = $_POST['teacher_id'];
$salary_amount = $_POST['salary_amount'];
$salary_date = $_POST['salary_date'];
 
$sql = "INSERT INTO salary (teacher_id, amount, date) VALUES ('$teacher_id', '$salary_amount', '$salary_date')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>
 