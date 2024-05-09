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
    die("Connection failed: " . $conn->connect_error);
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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p class="text-sm font-medium mb-1">Username</p>
      <input type="text" name="username" required>

      <p class="text-sm font-medium mt-2 mb-1">Password</p>
      <input type="password" name="password" required>
      <br>
      <button type="submit" class="mt-10 ml-20 text-2xl">Login</button>
    </form>
  </div>
</body>

</html>