<?php
$host = "localhost";
$user = "root";  // Change if needed
$password = "";  // Change if needed
$database = "crud_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
