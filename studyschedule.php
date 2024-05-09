<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Schedule</title>
    <link rel="stylesheet" href="studyschedule.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen relative">
    <header>
        <img src=" ./assets/left-arrow.png" alt="backarrow" class="h-10 w-10" onclick="window.history.back();">
        <!-- <img src="assets/left-arrow.png" alt="backbtn" href="<?php echo $_SERVER['HTTP_REFERER']; ?>"> -->
        <h1>Study Schedule</h1>
        <img src="assets/Studysched.png" alt="calendar" href="mainevent.php">
    </header>
    <span class="day">12 October</span>
    <div class="today">Today</div>
    <div class="calendar">
        <table>
            <thead>
                <tr>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td class="selected">14</td>
                    <td>15</td>
                    <td>16</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="schedule">
        <span class="time-range">8.00 - 11.00</span>
        <span class="radio-button"><input type="radio" name="activity1"></span>
        <div class="box" id="first">
            <h2 class="activity-name">Cloud Services</h2>
            <p id="week">Week 11</p>
            <li class="remarks"> Khalid Zaini</li>
            <li class="remarks"> Class 6.03</li>
        </div>
    </div>
    <div class="schedule">
        <span class="time-range">11.00 - 12.00</span>
        <span class="radio-button"><input type="radio" name="activity2"></span>
        <div class="box">
            <h2 class="activity-name">Self Study Hour</h2>
            <p id="week"></p>
            <li class="remarks"> Continue Assignment</li>
            <li class="remarks"> Assignment Consultation</li>
        </div>
    </div>
    <div class="schedule">
        <span class="time-range">1.30 - 4.30</span>
        <span class="radio-button"><input type="radio" name="activity3"></span>
        <div class="box">
            <h2 class="activity-name">User Experience Design</h2>
            <p id="week">Week 11</p>
            <li class="remarks"> Afifah Sait</li>
            <li class="remarks"> Class 2.01</li>
        </div>
    </div>
</body>

</html>