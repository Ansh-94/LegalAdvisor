<?php
$servername = "localhost"; // Change if your database is hosted remotely
$username = "root"; // Change if your database username is different
$password = ""; // Change if your database has a password
$database = "LegalAdvisor"; // Change to your actual database name

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>