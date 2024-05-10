<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $servername = "localhost";
  $db_username = "22FTTXXXX";
  $db_password = "awep_asg02";
  $dbname = "aweproject";

  $login = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($login->connect_error) {
    die("Connection failed: " . $login->connect_error);
  }

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $login->query($sql);

  if ($result->num_rows == 1) {
    $_SESSION["authenticated"] = true;
    header("Location: Homepage.php");
    exit();
  } else {
    $error_message = "Invalid username or password. Please try again.";
  }

  $login->close();
}
