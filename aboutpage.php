<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About Page</title>

    <style>
        body {
            padding-top: 30vh;
            position: relative;
            /* Added for positioning */
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 50vh;
            background: radial-gradient(circle at center top, #4F1161 50%, transparent 50%);
            z-index: -1;
        }

        /* Center the logo */
        .logo {
            position: absolute;
            top: 10vh;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            /* Set a higher z-index to overlay */
        }

        .arrow {
            position: fixed;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">

    <div class="arrow">
        <img src="./assets/left-arrow.png" alt="filter" class="w-10 h-10 sm-only">
    </div>

    <img src="./assets/LOGO.png" alt="logo" class="logo">

    <p class="text-center text-l">
        LearnTrack is dedicated to development of high-quality software,
        with the goal of simplifying the learning process for users.
        The platform is designed to be user-friendly, enabling users to track
        their progress and maintain motivation while studying.
    </p>
    <br>
    <p class="text-center text-l">
        Furthermore, LearnTrack is focused on making quality education accessible to
        users regardless of their location or available resources.
        Valuable insights into study habits are offered to help students devise effective learning strategies.
        The guiding principle is to prioritize the user experience,
        ensuring that the app remains accessible to a wide range of users.
    </p>
    <br>
    <p class="text-center text-l">
        Regular updates to the app are made based on user feeback
        and emerging trends in education and technology.
    </p>
    <br>
    <p class="text-center text-l">
        The strategic objective of LearnTrack is to achive user growth by
        gaining more users through marketing campaigns and user referrals.
        This will achieved by implementing a user-friendly interface,
        providing regular progress reports, and offering personalized study recommendations.
        The aim is to increase user engagement by at least 50% among registered users.
    </p>
</body>

</html>