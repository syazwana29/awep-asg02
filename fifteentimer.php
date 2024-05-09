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
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <div class="flex justify-between items-center px-4 py-2"> <!-- Added flexbox classes -->
        <img src="assets/left-arrow.png" alt="Left Arrow" style="height: 20px;"> <!-- Left arrow image retained -->
        <h1 class="text-center flex-grow"><b>Time Tracker</b></h1> <!-- Time Tracker heading centered -->
        <!-- Empty div removed -->
    </div>

    <!-- Move "23rd April" and "Hello!" to the right removed -->
    <!-- Text removed -->
    <div class="text-center mt-10 mb-3"> <!-- Adjusted margin-bottom -->
        <!-- Container for both "Hello!" and "Pomodoro Technique" removed -->
    </div>

    <!-- Container for Images in the Middle of the Screen removed -->

    <!-- Start Studying image positioned more to the right removed -->

    <!-- Time Recorded image positioned below Start Studying removed -->

    <!-- Navigation Bar at the Bottom removed -->

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
        // JavaScript function to set the selected option value removed
    </script>
</body>

</html>