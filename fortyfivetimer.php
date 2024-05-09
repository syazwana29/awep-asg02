<!DOCTYPE html>
<html>

<head>
    <title>Timer App</title>
</head>

<body>
    <form method="post">
        <button type="submit" name="time" value="10">10 seconds</button>
        <button type="submit" name="time" value="30">30 seconds</button>
        <button type="submit" name="time" value="60">1 minute</button>
        <button type="submit" name="start_timer">Start Timer</button>
    </form>
    <div id="notification">
        <?php
        session_start();
        if (isset($_SESSION['notification'])) {
            echo $_SESSION['notification'];
            unset($_SESSION['notification']);
        }
        ?>
    </div>
</body>

</html>



<?php
session_start();

if (isset($_POST['time'])) {
    $_SESSION['timer_duration'] = (int)$_POST['time'];
} elseif (isset($_POST['start_timer'])) {
    startTimer();
}

function startTimer()
{
    if (isset($_SESSION['timer_duration'])) {
        $seconds = $_SESSION['timer_duration'];
        $now = time();
        $then = $now + $seconds;

        while (time() < $then) {
            // Wait for the timer to finish
        }

        $_SESSION['notification'] = "Timer ended!";
        unset($_SESSION['timer_duration']);
        header("Location: index.php");
        exit();
    }
}
?>