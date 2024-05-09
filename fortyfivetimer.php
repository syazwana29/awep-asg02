<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Time Tracker</title>
    <style>
        .selected-option {
            filter: grayscale(0%);
            transition: filter 0.3s ease;
        }

        .selected-option:hover {
            filter: grayscale(0%);
        }

        .selected-option.clicked {
            filter: grayscale(0%) brightness(80%);
        }

        /* Center and enlarge timer */
        #timer {
            font-size: 4rem;
            /* Large font size */
            text-align: center;
            /* Center the text */
            border-radius: 50%;
            /* Make it a circle */
            border: 4px solid black;
            /* Add border */
            width: 300px;
            /* Adjust width to make the circle larger */
            height: 300px;
            /* Adjust height to make the circle larger */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Adjustments for positioning */
        .timer-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Positioning for left arrow */
        .left-arrow {
            position: absolute;
            top: 10px;
            /* Adjust as needed */
            left: 10px;
            /* Adjust as needed */
        }

        /* Adjust position of the Time Tracker heading */
        .time-tracker-heading {
            position: absolute;
            top: 20px;
            /* Adjust to lower the heading */
            left: 50%;
            /* Center horizontally */
            transform: translateX(-50%);
            /* Center horizontally */
        }

        /* Center the buttons */
        .button-container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <a href="timetrackerhome.php" class="left-arrow">
        <img src="./assets/left-arrow.png" alt="Left Arrow" class="h-10 w-10">
    </a>
    <h1 class="text-center time-tracker-heading"><b>Time Tracker</b></h1> <!-- Adjusted class -->

    <div class="timer-container"> <!-- Adjusted container -->
        <div id="timer" class="text-6xl font-bold mb-8">45:00</div>
        <div class="space-x-4 flex button-container"> <!-- Adjusted container -->
            <button class="bg-purple-400 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded" onclick="startTimer()">Start</button>
            <button class="bg-purple-400 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded" onclick="pauseTimer()">Pause</button>
            <button class="bg-purple-400 hover:bg-purple-400 text-white font-bold py-2 px-4 rounded" onclick="stopTimer()">Stop</button>
        </div>
    </div>

    <script>
        let timerInterval;
        let totalSeconds = 2700; // 45 minutes = 45 * 60 seconds
        let paused = false;

        function startTimer() {
            if (!paused) {
                clearInterval(timerInterval);
                timerInterval = setInterval(updateTimer, 1000);
            }
            paused = false;
        }

        function pauseTimer() {
            clearInterval(timerInterval);
            paused = true;
        }

        function stopTimer() {
            clearInterval(timerInterval);
            totalSeconds = 2700;
            paused = false;
            updateTimer();
        }

        function updateTimer() {
            const minutes = Math.floor(totalSeconds / 60);
            let seconds = totalSeconds % 60;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            document.getElementById('timer').textContent = `${minutes}:${seconds}`;

            if (totalSeconds === 0) {
                clearInterval(timerInterval);
                alert('Timer finished!');
            } else {
                totalSeconds--;
            }
        }
    </script>
</body>

</html>