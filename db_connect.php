<?php
$hostname = "localhost";  // Change this if your MySQL server is on a different host
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$database = "main";  // Replace with your database name

// Create a connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
