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
        function openBoard(day) {
            // Hide all boards
            var boards = document.getElementsByClassName("board");
            for (var i = 0; i < boards.length; i++) {
                boards[i].classList.remove("active");
            }

            // Show the selected board
            var board = document.getElementById("board-" + day);
            board.classList.add("active");
        }
    </script>
</body>

</html>