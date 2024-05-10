<?php 
include 'db_connection.php';

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) !== TRUE) {
    die("Error creating database: " . $conn->error);
}

// Select the database
if (!$conn->select_db($dbName)) {
    die("Error selecting database: " . $conn->error);
}
// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";
    if ($conn->query($sql) !== TRUE) {
        echo "Error creating table: " . $conn->error;
    }

$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbName' AND TABLE_NAME = 'users' AND COLUMN_NAME = 'role'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $sql = "ALTER TABLE users ADD COLUMN role ENUM('user', 'admin') NOT NULL DEFAULT 'user'";
    if ($conn->query($sql) !== TRUE) {
        echo "Error adding column: " . $conn->error;
    }
}

$adminUsername = "admin";
$adminPassword = "admin";
$adminRole = "admin";

// Check if the admin user already exists
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $adminUsername);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 0) {
    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $adminUsername, $adminPassword, $adminRole);
    if ($stmt->execute() !== TRUE) {
        echo "Error creating admin user: " . $stmt->error;
    }
}

$userUsername = "Jane Doe";
$userPassword = "JaneDoe123";
$userRole = "user";

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userUsername);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows == 0) {
    // The 'UserMan' user does not exist, so insert it
    $sql = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $userUsername, $userPassword, $userRole);
    if ($stmt->execute() !== TRUE) {
        echo "Error creating 'UserMan' user: " . $conn->error;
    }
}
$stmt->close();
$conn->close();
// Start the session
session_start();
// Redirect to the appropriate page based on the user role
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    header("Location: login.php");
} else {
    header("Location: login.php");
}
exit;
?>