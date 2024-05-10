<?php
session_start();
require 'db_connection.php';
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // login success
  $row = $result->fetch_assoc();

  $_SESSION['user'] = $row;
  if ($_SESSION['user']['role'] == 'user') { // Check role from session
    header('Location: Homepage.php'); // Update the location here
  } else {
    header('Location: Homepage.php');
  }
} else {
  // login failed
  echo "Invalid username or password";
}
$stmt->close();
$conn->close();
