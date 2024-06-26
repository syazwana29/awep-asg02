<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Time Tracker</title>
    <style>
        .clicked {
            filter: grayscale(0%) brightness(80%);
            background-color: purple;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <div class="flex justify-between items-center px-4 py-2"> <!-- Added flexbox classes -->
        <img src="./assets/left-arrow.png" alt="backarrow" class="h-10 w-10 cursor-pointer" onclick="goBackToHomepageOrNavigationTab();"> <!-- Modified onclick event -->
        <h1 class="text-center"><b>Time Tracker</b></h1> <!-- Centered heading -->
        <div></div> <!-- Empty div to maintain space -->
    </div>

    <!-- Move "23rd April" and "Hello!" to the right -->
    <h2 class="pl-10">23rd April</h2>
    <h1 class="pl-10"><b>Hello !</b></h1>
    <div class="text-center mt-10 mb-3"> <!-- Adjusted margin-bottom -->
        <!-- Container for both "Hello!" and "Pomodoro Technique" -->
        <div>
            <h2>The Pomodoro Technique is a time management method that boosts focus and productivity by breaking work into short, timed sessions.</h2>
        </div>
    </div>

    <!-- Container for Images in the Middle of the Screen -->
    <div class="flex flex-col items-center justify-center mt-4"> <!-- Added flexbox classes -->
        <a href="#" onclick="toggleOption('fifteen')"><img id="fifteen" src="assets/fifteenmins.png" alt="Fifteen Minutes" style="width: 375px; height: 71px; margin-left: 0px;"></a> <!-- Set width, height, and adjust left margin -->
        <a href="#" onclick="toggleOption('thirty')"><img id="thirty" src="assets/thirty.png" alt="Thirty Minutes" style="width: 375px; height: 71px; margin-left: 0px;"></a> <!-- Set width, height, and adjust left margin -->
        <a href="#" onclick="toggleOption('fortyfive')"><img id="fortyfive" src="assets/fortyfive.png" alt="Forty-Five Minutes" style="width: 375px; height: 71px; margin-left: 0px;"></a> <!-- Set width, height, and adjust left margin -->
    </div>

    <!-- Start Studying image positioned more to the right -->
    <div class="flex justify-end pr-0 relative"> <!-- Adjusted pr-20 for more right padding -->
        <form id="start-studying-form" action="" method="post"> <!-- Added form with ID and action as empty -->
            <input id="selected-option" type="hidden" name="option" value=""> <!-- This will hold the selected option -->
            <button type="submit"><img src="assets/startstudying.png" alt="Start Studying" style="width: 190px; height: 60px;"></button> <!-- Set width and height -->
        </form>
    </div>

    <!-- Time Recorded image positioned below Start Studying -->
    <div class="flex flex-col items-center justify-center mt-4"> <!-- Add flexbox classes to center vertically and horizontally -->
        <img src="assets/studytime.png" alt="Study Time" class="mx-auto"> <!-- Add mx-auto class to center horizontally -->
    </div>

    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 px-4 py-2 z-10 flex justify-center"> <!-- Adjusted padding -->
        <div style="border-radius: 9999px; border: 4px solid white; padding: 5px;" onclick="window.location.href='NavigationTab.php'"> <!-- Adjusted border-width -->
            <img src="assets/timetracker.png" alt="Time Tracker" style="height: 60px;"> <!-- Adjusted height -->
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['option'])) {
            $option = $_POST['option'];
            switch ($option) {
                case 'fifteen':
                    header("Location: fifteentimer.php");
                    exit();
                    break;
                case 'thirty':
                    header("Location: thirtytimer.php");
                    exit();
                    break;
                case 'fortyfive':
                    header("Location: fortyfivetimer.php");
                    exit();
                    break;
                default:
                    // Handle default case
                    break;
            }
        }
    }
    ?>

    <script>
        // JavaScript function to set the selected option value
        function toggleOption(option) {
            var img = document.getElementById(option);
            var allImages = document.querySelectorAll('img[id^="fifteen"], img[id^="thirty"], img[id^="fortyfive"]');

            // Remove 'clicked' class from all images
            allImages.forEach(function(image) {
                image.classList.remove('clicked');
            });

            var selectedOption = document.getElementById("selected-option");
            if (selectedOption.value === option) {
                selectedOption.value = ""; // If already selected, deselect it
            } else {
                img.classList.add('clicked'); // Add 'clicked' class to the clicked image
                selectedOption.value = option; // Otherwise, select it
            }
        }

        // Function to navigate back to either homepage.php or navigationtab.php
        // Function to navigate back to either homepage.php or navigationtab.php
        function goBackToHomepageOrNavigationTab() {
            var previousPageUrl = sessionStorage.getItem('previousPageUrl');
            if (previousPageUrl.includes('homepage.php')) {
                window.location.href = previousPageUrl;
            } else if (previousPageUrl.includes('navigationtab.php')) {
                window.location.href = previousPageUrl;
            } else {
                // Redirect to homepage.php as a default behavior
                window.location.href = 'homepage.php';
            }
        }


        // Function to store the previous page URL in session storage
        function storePreviousPageUrl() {
            sessionStorage.setItem('previousPageUrl', window.location.href);
        }

        // Call function to store the previous page URL when the page loads
        window.onload = function() {
            storePreviousPageUrl();
        };
    </script>
</body>

</html>