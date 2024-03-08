<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student_db';  // Add a semicolon here

$conn = new mysqli($servername, $username, $password, $dbname);  // Fix the class name to mysqli

if ($conn->connect_error) {
    exit('Connect failed: ' . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>