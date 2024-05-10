<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Settings</title>

</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative flex flex-col">

</body>
<div style="position: relative;">
    <img src="./assets/userPic.png" alt="" style="height: 0%; width:100%;">
    <img src="./assets/left-arrow.png" alt="backarrow" class="h-10 w-10" onclick="window.history.back();" style="position: absolute; top: 0; left: 0;">
</div>
<div>
    <img src="./assets/user.png" alt="">
    <h1>Jane Doe</h1>
    <img src="./assets/phoneNo.png" alt="">
    <p>+673 123 4567</p>
    <img src="./assets/email.png" alt="">
    <p>JaneDoe@gmail.com</p>
    <img src="./assets/password.png" alt="">
    <p>Password</p>
</div>
<div style="font-size:30px; background-color: #78318C; border: 3px solid white; height: 50px;" class="rounded-lg p-4 w-1/2 mx-auto flex items-center justify-center text-center text-white" onclick="window.location.href='login.php'">
    Sign Out
</div>

</html>