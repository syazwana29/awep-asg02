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
    <div class="text-center mt-10 mb-4"> <!-- Adjusted margin-bottom -->
        <!-- Container for both "Hello!" and "Pomodoro Technique" -->
        <div>
            <h2>The Pomodoro Technique is a time management method that boosts focus and productivity by breaking work into short, timed sessions.</h2>
        </div>
    </div>

    <!-- Container for Images in the Middle of the Screen -->
    <div class="flex flex-col items-center justify-center mt-4"> <!-- Added flexbox classes -->
        <img src="assets/fifteenmins.png" alt="Fifteen Minutes" style="width: 375px; height: 71px; margin-left: 0px;"> <!-- Set width, height, and adjust left margin -->
        <img src="assets/thirty.png" alt="Thirty Minutes" style="width: 375px; height: 71px; margin-left: 0px;"> <!-- Set width, height, and adjust left margin -->
        <img src="assets/fortyfive.png" alt="Forty-Five Minutes" style="width: 375px; height: 71px; margin-left: 0px;"> <!-- Set width, height, and adjust left margin -->
    </div>

    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 p-10 z-10">
        <ul class="flex justify-center">

        </ul>
    </div>
</body>

</html>