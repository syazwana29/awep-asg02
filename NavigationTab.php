<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Navigation Tab</title>
</head>

<body style="background-color: rgba(170, 81, 196, 0.8);" class="h-screen relative">
    <!-- onclick="window.history.back();"    -->
    <img src=" ./assets/left-arrow.png" alt="backarrow" class="h-10 w-10" onclick="window.history.back();">
    <br>
    <br>
    <br>
    <br>
    <div style="display: flex; justify-content: center; gap: 20px;">
        <div class="bg-white rounded-lg p-5" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='studyschedule.php'">
            <img src="./assets/Studysched.png" alt="study">
            <p>Study Schedule</p>
        </div>
        <div class="bg-white rounded-lg p-5" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='timetrackerhome.php'">
            <img src="./assets/alarm.png" alt="time">
            <p>Time Tracking</p>
        </div>
    </div>
    <br>
    <br>

    <div style="display: flex; justify-content: center; gap: 20px;">
        <div class="bg-white rounded-lg p-6" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='Homepage.php'">
            <img src="./assets/smallLogo.png" alt="home">
            <p>Home</p>
        </div>
        <div class="bg-white rounded-lg p-5" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='TaskManager.php'">
            <img src="./assets/task.png" alt="task">
            <p>Task Manager</p>
        </div>
    </div>

    <br>
    <br>
    <div style="display: flex; justify-content: center; gap: 20px;">
        <div class="bg-white rounded-lg p-7" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='notes.php'">
            <img src="./assets/notes.png" alt="note">
            <p>Notes</p>
        </div>
        <div class="bg-white rounded-lg p-7" style="display: flex; flex-direction: column; align-items: center;" onclick="window.location.href='mainevent.php'">
            <img src="./assets/exam.png" alt="exam">
            <p>Exam</p>
        </div>
    </div>
</body>

</html>