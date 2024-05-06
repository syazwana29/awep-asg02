<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <div style="display: flex; justify-content: space-between;">
        <img src="./assets/filters.png" alt="filter" class="w-10 h-10">
        <p class="text-xl font-bold">Home</p>
        <img src="./assets/smallLogo.png" alt="logo" class="w-14 h-14">
    </div>
    <br>
    <div>
        <p class="text-2xl font-bold">Welcome</p>
        <p>We're here to assist you to explore educational journey</p>
        <br>
        <br>
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="bg-white rounded-lg p-4"> <img src="./assets/Studysched.png" alt="schedule">
                    Study Schedule</div>
                <div class="bg-white rounded-lg p-4"><img src="./assets/timetracker.png" alt="time tracker">Time Tracking</div>
                <div class="bg-white rounded-lg p-4"><img src="./assets/task.png" alt="task manager">Task Manager</div>
            </div>
        </div>
        <br>
        <p class="text-xl font-bold">Others</p>
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="bg-white rounded-lg p-4">Notes</div>
                <div class="bg-white rounded-lg p-4">Exam</div>
            </div>
        </div>
        <br><br>
        <div class="container mx-auto">
            <div class="bg-white rounded-lg p-4">
                <p>"Aim to be 1% better than yesterday"</p>
                <p>- Unknown.</p>
            </div>
            <br>
            <div class="bg-white rounded-lg p-4">
                About Us
            </div>
        </div>

    </div>
    </div>



    <!-- Navigation Bar at the Bottom -->
    <div class=" fixed bottom-0 left-0 w-full bg-yellow-300 p-10 z-10">
        <ul class="flex justify-center">

        </ul>
    </div>
</body>

</html>