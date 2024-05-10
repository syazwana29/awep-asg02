<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $dbname = "aweproject";

  $login = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($login->connect_error) {
    die("Connection failed: " . $login->connect_error);
  }

  $stmt = $login->prepare("SELECT id, username, password FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $db_username, $db_password_hash);
    $stmt->fetch();

    if (password_verify($password, $db_password_hash)) {
      $_SESSION["authenticated"] = true;
      $_SESSION["user_id"] = $id;
      header("Location: Homepage.php");
      exit();
    } else {
      $error_message = "Invalid username or password. Please try again.";
    }
  } else {
    $error_message = "Invalid username or password. Please try again.";
  }

  $stmt->close();
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
      <input type="text" name="username" value="Jane Doe" required>

      <p class="text-sm font-medium mt-2 mb-1">Password</p>
      <input type="password" name="password" value="JaneDoe123" required>
      <br>
      <button type="submit" class="mt-10 ml-20 text-2xl">Login</button>
    </form>
  </div>
</body>

</html>