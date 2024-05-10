<?php
session_start();
require 'db_connection.php';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
    $errors[] = "Username is required";
  }
  if (empty($password)) {
    $errors[] = "Password is required";
  } elseif (strlen($password) < 8) {
    $errors[] = "Password must be at least 8 characters";
  }

  if (!$errors) {
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
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Log in Page</title>
</head>

<body class="bg-blue-100">

  <div>
    <img src="assets/LOGO.png" class="w-32 h-32 mb-0 mt-16">
    <h1 class="text-purple-900 ml-8 text-2xl font-bold">Welcome</h1>
    <p class="text-purple-900 ml-8 text-xl">Log In to continue</p>
  </div>

  <div class="mt-36 ml-10">
    <form method="post" action="login_process.php">
      <p class="text-sm font-medium mb-1" for="username">Username</p>
      <input id="username" type="text" name="username" required>

      <p class="text-sm font-medium mt-2 mb-1" for="password">Password</p>
      <input id="password" type="password" name="password" required>
      <br>
      <button type="submit" class="mt-10 ml-20 text-2xl">Login</button>
    </form>
  </div>
</body>

</html>