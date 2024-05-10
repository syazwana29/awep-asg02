<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Main Event Page</title>

    <style>
        /* Add media queries to make the layout responsive */
        @media (max-width: 640px) {
            .sm-only {
                display: block;
            }
        }

        @media (min-width: 641px) {
            .sm-only {
                display: none;
            }
        }

        /* Add padding to each calendar cell */
        .calendar-grid .text-center {
            padding: 8px;
            /* Adjust the padding size as needed */
        }
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 min-h-screen relative">

    <div class="flex justify-between items-center px-4 sm:px-6 lg:px-8">
        <img src="./assets/left-arrow.png" alt="filter" class="w-10 h-10 sm-only" onclick="window.history.back();">

        <img src="./assets/smallLogo.png" alt="logo" class="fixed right-0 top-0 w-14 h-14">
    </div>

    <div class="px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Main Event</h1>
        <h2 class="text-2xl">October</h2>
    </div>

    <!-- Calendar -->
    <div class="calendar-grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 max-w-4xl p-4">
        <div class="grid grid-cols-7 gap-1">
            <div class="text-center text-gray-500">Mon</div>
            <div class="text-center text-gray-500">Tue</div>
            <div class="text-center text-gray-500">Wed</div>
            <div class="text-center text-gray-500">Thu</div>
            <div class="text-center text-gray-500">Fri</div>
            <div class="text-center text-gray-500">Sat</div>
            <div class="text-center text-gray-500">Sun</div>
            <!-- Days -->
            <!-- Add padding to each cell -->
            <div class="text-center text-gray-500">29</div>
            <div class="text-center text-gray-500">30</div>
            <div class="text-center text-black">1</div>
            <div class="text-center text-black">2</div>
            <div class="text-center text-black">3</div>
            <div class="text-center text-black">4</div>
            <div class="text-center text-black">5</div>
            <div class="text-center text-black">6</div>
            <div class="text-center text-black">7</div>
            <div class="text-center text-black">8</div>
            <div class="text-center text-black">9</div>
            <div class="text-center text-black">10</div>
            <div class="text-center text-black">11</div>
            <div class="text-center text-black">12</div>
            <div class="text-center text-black">13</div>
            <div class="text-center text-black">14</div>
            <div class="text-center text-black">15</div>
            <div class="text-center text-black">16</div>
            <div class="text-center text-black">17</div>
            <div class="text-center text-black">18</div>
            <div class="text-center text-black">19</div>
            <div class="text-center text-black">20</div>
            <div class="text-center text-black">21</div>
            <div class="text-center text-black">22</div>
            <div class="text-center text-black">23</div>
            <div class="text-center text-black">24</div>
            <div class="text-center text-black">25</div>
            <div class="text-center text-black">26</div>
            <div class="text-center text-black">27</div>
            <div class="text-center text-black">28</div>
            <div class="text-center text-black">29</div>
            <div class="text-center text-black">30</div>
            <div class="text-center text-black">31</div>
            <div class="text-center text-gray-500">1</div>
            <div class="text-center text-gray-500">2</div>
            <div class="text-center text-gray-500"></div>
            <div class="text-center text-gray-500"></div>
            <div class="text-center text-gray-500"></div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 bg-blue-300 rounded-lg">
        <p class="text-2xl font-bold">...</p>
    </div>

    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 p-4 sm:p-10 z-10">
        <!-- Add navigation items here -->
    </div>

    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 px-4 py-2 sm:py-4 z-10 flex justify-center">
        <div style="border-radius: 9999px; border: 4px solid white; padding: 5px;" onclick="window.location.href='NavigationTab.php'">
            <img src="assets/Studysched.png" alt="study schedule" class="h-12 w-12 sm:h-16 sm:w-16 object-cover">
        </div>
    </div>

</body>

</html>