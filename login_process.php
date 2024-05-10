<?php
session_start();
require 'db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
  $_SESSION['user'] = $user;
  if ($_SESSION['user']['role'] == 'user') {
    header('Location: Homepage.php');
  } else {
    header('Location: Homepage.php');
  }
} else {
  echo "Invalid username or password";
}
