<?php
$host = "localhost";
$user = "root"; // Default MySQL user
$password = ""; // Leave empty if no password
$database = "mayur_plant";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
