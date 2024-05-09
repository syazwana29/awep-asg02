<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $valid_username = "22FTT1503";
  $valid_password = "password123";

  if ($username === $valid_username && $password === $valid_password) {
    $_SESSION["authenticated"] = true;

    header("Location: mainEvent.php");
    exit();
  } else {
    $error_message = "Invalid username or password. Please try again.";
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
    <p class="text-sm font-medium mb-1">Username</p>
    <input type="email"></input>

    <p class="text-sm font-medium mt-2 mb-1">Password</p>
    <input type="password"></input>
    <br>
    <button class="mt-10 ml-20 text-2xl">Login</button>
  </div>
</body>

</html>