<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Time Tracker</title>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <h1 style="text-align: center; margin-top: 20px;"><b>Time Tracker</b></h1>
    <!-- Move "23rd April" and "Hello!" to the right -->
    <h2 class="pl-10">23rd April</h2>
    <h1 class="pl-10"><b>Hello !</b></h1>

    <!-- Image in the Middle of the Screen -->
    <div class="absolute inset-0 flex items-center justify-center">
        <img src="assets/fifteen.png" alt="Fifteen" class="w-120 h-64">
    </div>

    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 p-10 z-10">
        <ul class="flex justify-center">

        </ul>
    </div>
</body>

</html>