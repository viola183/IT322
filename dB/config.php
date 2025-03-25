<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "studentenrollment"; // Without .db

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Display connection error message
} else {
    echo "Connected successfully"; // Optional: Confirm successful connection
}

?>
