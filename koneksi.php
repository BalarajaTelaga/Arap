<?php
$host = "localhost";
$user = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "tubesweb1"; // Replace with your database name
$port = 3308; // Port number for the MySQL connection

// Create connection
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

