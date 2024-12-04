<?php
$servername = "localhost";
$username = "root"; // your DB username
$password = "123456"; // your DB password
$dbname = "hostel"; // your DB name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
