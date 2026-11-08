<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "auth_demo";

$conn = new mysqli($host, $username, $password, $database);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
