<!DOCTYPE html>
<html>

<head>
    <title>Study Schedule</title>
    <link rel="stylesheet" type="text/css" href="studyschedule.css">
</head>

<body>
    <div class="header">
        <a href="#" id="back-button"><img src="assets/left-arrow.png"></a>
        <h1>Study Schedule</h1>
        <a href="#" id="calendar-symbol"><img src="assets/Studysched.png"></a>
    </div>
    <span class="date-of-today">
        <div id="datetdy"><?php echo date("d/m"); ?></div>
        <div>Today</div>
    </span>
    <div class="daysinweek">
        <?php
        $daysInWeek = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
        foreach ($daysInWeek as $day) {
            echo "<div class='day' onclick='openBoard(\"$day\")'>$day</div>";
        }
        ?>
    </div>
    <div id="boards">
        <?php
        foreach ($daysInWeek as $day) {
            echo "<div class='board' id='board-$day'></div>";
        }
        ?>
    </div>
    <script src="scripts.js">
    </script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Schedule</title>
    <link rel="stylesheet" href="studyschedule.css">
</head>

<body>
    <div class="header">
        <h1>Study Schedule</h1>
        <a href="" id="backbtn"><img src="assets/left-arrow.png" alt="leftarrow"></a>
        <a href="" id="calendarbtn"><img src="assets/Studysched.png" alt="calendar"></a>
    </div>
    <span class="date-of-today">
        <div id="datetdy"><?php echo date("d/m"); ?></div>
        <div>Today</div>
    </span>
    <div class="daysinweek">
        <?php
        $daysOfWeek = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
        foreach ($daysOfWeek as $day) {
            echo "<div class='day' onclick='openBoard(\"$day\")'>$day</div>";
        }
        ?>
    </div>
</body>

</html>