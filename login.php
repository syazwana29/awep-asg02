<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Log in Page</title>

  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .form-container input {
      margin-bottom: 15px;
      padding: 10px;
      width: 200px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .login-button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: plum;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-button:hover {
      background-color: purple;
    }
  </style>
</head>

<body class="bg-blue-100">

  <div>
    <img src="assets/LOGO.png" class="w-32 h-32 mb-0 mt-16">
    <h1 class="text-purple-900 ml-8 text-2xl font-bold">Welcome</h1>
    <p class="text-purple-900 ml-8 text-xl">Log In to continue</p>
  </div>

  <div class="form-container mt-36">
    <form method="post" action="login_process.php">
      <p class="text-m font-medium mb-1" for="username">Username</p>
      <input id="username" type="text" name="username" required>

      <p class="text-m font-medium mt-2 mb-1" for="password">Password</p>
      <input id="password" type="password" name="password" required>
      <br>
      <button type="submit" class="login-button mt-10 ml-10 text-2xl">Login</button>
    </form>
  </div>
</body>

</html>