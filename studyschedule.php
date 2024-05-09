<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="font-family: sans-serif; background:linear-gradient(to bottom, #f9f9f9, #90caf9);" class="h-screen relative">
    <header style="display: flex; justify-content: space-between; margin-bottom: 20px; align-items: center; padding: 0 20px;">
        <img src=" ./assets/left-arrow.png" alt="backarrow" style="width: 30px; height: 30px;" onclick="window.history.back();">
        <h1 style="font-size: 25px; margin: 0; margin-left: auto; margin-right: auto;">Study Schedule</h1>
        <a href="mainevent.php"><img src="assets/Studysched.png" alt="calendar" style="width: 30px; height: 30px;"></a>
    </header>
    <span class="day" style="margin-left: 15px; font-weight: bold;">12 October</span>
    <div class="today" style="margin-left: 15px; font-style: italic; color: #2f2d2d; font-size: 30px;">Today</div>
    <div class="calendar" style="border: none; border-radius: 5px; margin-bottom: 20px; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Mon</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Tue</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Wed</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Thu</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Fri</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Sat</th>
                    <th style="text-align: center; vertical-align: top; padding: 10px 0;">Sun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">10</td>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">11</td>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">12</td>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">13</td>
                    <td class="selected" style="text-align: center; vertical-align: top; padding: 10px 0; border-bottom: 2px solid #000;">14</td>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">15</td>
                    <td style="text-align: center; vertical-align: top; padding: 10px 0;">16</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="schedule" style="display: flex; align-items: center; margin-bottom: 10px;">
        <span class="time-range" style="width: 60px; text-align: center; font-weight: bold;">8.00 - 11.00</span>
        <span class="radio-button" style="margin: 0 10px; padding: 0 5px;"><input type="radio" name="activity1"></span>
        <div class="box" id="first" style="padding: 20px; border: 1px solid #ccc; background-color: #ffc96c; width:50%; border-radius:10px; box-shadow: gray 0px 4px 4px;">
            <h2 class="activity-name" style="font-size: 24px;">Cloud Services</h2>
            <p class="week" style="font-size: 18px;">Week 11</p>
            <ul>
                <li class="remarks" style="font-size: 18px;">• Khalid Zaini</li>
                <li class="remarks" style="font-size: 18px;">• Class 6.03</li>
            </ul>
        </div>
    </div>
    <div class="schedule" style="display: flex; align-items: center; margin-bottom: 10px;">
        <span class="time-range" style="width: 60px; text-align: center; font-weight: bold;">11.00 - 12.00</span>
        <span class="radio-button" style="margin: 0 10px; padding: 0 5px;"><input type="radio" name="activity2"></span>
        <div class="box" style="padding: 20px; border: 1px solid #ccc; background-color: #f0f0f0; width:50%; border-radius:10px; box-shadow: gray 0px 4px 4px;">
            <h2 class="activity-name" style="font-size: 24px;">Self Study Hour</h2>
            <p class="week" style="font-size: 18px;">• Continue Assignment</p>
            <p class="week" style="font-size: 18px;">• Assignment Consultation</p>
        </div>
    </div>
    <div class="schedule" style="display: flex; align-items: center; margin-bottom: 10px;">
        <span class="time-range" style="width: 60px; text-align: center; font-weight: bold;">1.30 - 4.30</span>
        <span class="radio-button" style="margin: 0 10px; padding: 0 5px;"><input type="radio" name="activity3"></span>
        <div class="box" style="padding: 20px; border: 1px solid #ccc; background-color: #f0f0f0; width:50%; border-radius:10px; box-shadow: gray 0px 4px 4px;">
            <h2 class="activity-name" style="font-size: 24px;">User Experience Design</h2>
            <p class="week" style="font-size: 18px;">Week 11</p>
            <ul>
                <li class="remarks" style="font-size: 18px;">• Afifah Sait</li>
                <li class="remarks" style="font-size: 18px;">• Class 2.01</li>
            </ul>
        </div>
    </div>
</body>

</html>