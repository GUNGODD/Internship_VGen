<?php
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "online_quiz";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
