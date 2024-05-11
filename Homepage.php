<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative flex flex-col">
    <div style="display: flex; justify-content: space-between;">
        <img src="./assets/filters.png" alt="filter" class="w-10 h-10" onclick="window.location.href='setting.php'">

        <img src="./assets/smallLogo.png" alt="logo" class="w-14 h-14">
    </div>
    <p class="text-xl font-bold text-center">Home</p>
    <br>
    <div>
        <p class="text-2xl font-bold pl-4">Welcome</p>
        <p class="pl-4">We're here to assist you to explore educational journey</p>
        <br>
        <br>

        <div class="container mx-auto">
            <div class="flex justify-around">
                <div class="bg-white rounded-lg p-2 flex flex-col items-center justify-center " onclick="window.location.href='studyschedule.php'">
                    <img src="./assets/Studysched.png" alt="schedule">
                    <p class="text-lg">Study Schedule</p>
                </div>
                <div class="bg-white rounded-lg p-3 flex flex-col items-center justify-center" onclick="window.location.href='timetrackerhome.php'">
                    <img src="./assets/timetracker.png" alt="time tracker" class="h-30 w-30">
                    <p class="text-lg">Time Tracking</p>
                </div>
                <div class="bg-white rounded-lg p-2 flex flex-col items-center justify-center" onclick="window.location.href='TaskManager.php'">
                    <img src="./assets/task.png" alt="task manager">

                    <p class="text-lg">Task Manager</p>
                </div>
            </div>
        </div>
        <br>
        <p class="text-xl font-bold pl-4"> Others</p>
        <br>
        <div class="container mx-auto">
            <div class="flex mx-auto justify-center space-x-4">
                <div class="bg-white rounded-lg p-4 flex items-center justify-center" style="width:210px; font-size:20px;" onclick="window.location.href='notes.php'">Notes</div>
                <div class="bg-white rounded-lg p-4 flex items-center justify-center" style="width:210px; font-size:20px;" onclick="window.location.href='mainevent.php'">Exam</div>
            </div>
        </div>
        <br>
        <div class="container mx-auto">
            <div style="height: 110px; width: 450px; font-size:20px;" class="bg-white rounded-lg p-4 flex flex-col items-center justify-center mx-auto">
                <p>"Aim to be 1% better </p>
                <p>than yesterday"</p>
                <p> - Unknown.</p>
            </div>
            <br>
            <div style="font-size:20px; background-color: #78318C; border: 2px solid white; height: 50px;" class="rounded-lg p-4 w-1/2 mx-auto flex items-center justify-center text-center text-white" onclick="window.location.href='aboutpage.php'">
                About Us
            </div>
        </div>




        <!-- Navigation Bar at the Bottom -->

        <footer class="fixed bottom-0 left-0 w-full  bg-yellow-300 ">
            <ul class="flex justify-end">
                <p class="text-purple-700">LearnTrack.inc</p>
            </ul>
        </footer>
</body>

</html>