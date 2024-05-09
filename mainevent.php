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

            .md-and-up {
                display: none;
            }

            .calendar-container {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .calendar-week-header {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .calendar-day {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .calendar-day-number {
                font-size: 1rem;
            }

            .calendar-day-content {
                padding: 0.5rem;
            }
        }

        @media (min-width: 641px) {
            .md-and-up {
                display: block;
            }

            .sm-only {
                display: none;
            }

            .calendar-container {
                grid-template-columns: repeat(7, minmax(0, 1fr));
            }

            .calendar-week-header {
                grid-template-columns: repeat(7, minmax(0, 1fr));
            }

            .calendar-day {
                grid-template-columns: repeat(7, minmax(0, 1fr));
            }

            .calendar-day-number {
                font-size: 1.5rem;
            }

            .calendar-day-content {
                padding: 1rem;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 min-h-screen relative">

    <div class="flex justify-between items-center px-4 sm:px-6 lg:px-8">
        <img src="./assets/left-arrow.png" alt="filter" class="w-10 h-10 sm-only">

        <img src="./assets/smallLogo.png" alt="logo" class="w-14 h-14 md-and-up">
    </div>

    <div class="px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold">Main Event</h1>
        <h2 class="text-2xl">October</h2>
    </div>

    <!-- Calendar -->
    <div class="container mx-auto px-4 py-6 sm:px-6 lg:px-8 bg-transparent calendar-container">
        <div class="bg-white rounded-lg shadow overflow-hidden">

            <div class="px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="px-4 py-5 grid grid-cols-7 gap-4 calendar-week-header">
                        <dt class="text-sm font-medium text-gray-500">
                            Sun
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Mon
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Tue
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Wed
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Thu
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Fri
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            Sat
                        </dt>
                    </div>
                    <!-- Week 1 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6 calendar-day">
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days before the 1st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            1
                        </dt>
                    </div>
                    <!-- Week 2 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            2
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            3
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            4
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            5
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            6
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            7
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            8
                        </dt>
                    </div>
                    <!-- Week 3 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            9
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            10
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            11
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            12
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            13
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            14
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            15
                        </dt>
                    </div>
                    <!-- Week 4 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            16
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            17
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            18
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            19
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            20
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            21
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            22
                        </dt>
                    </div>
                    <!-- Week 5 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            23
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            24
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            25
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            26
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            27
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            28
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            29
                        </dt>
                    </div>
                    <!-- Week 6 -->
                    <div class="px-4 py-5 sm:grid sm:grid-cols-7 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            30
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            31
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days after the 31st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days after the 31st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days after the 31st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days after the 31st -->
                        </dt>
                        <dt class="text-sm font-medium text-gray-500">
                            <!-- Empty for days after the 31st -->
                        </dt>
                    </div>
                </dl>
            </div>
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
        <div style="border-radius: 9999px; border: 4px solid white; padding: 5px;">
            <img src="assets/Studysched.png" alt="study schedule" class="h-12 w-12 sm:h-16 sm:w-16 object-cover">
        </div>
    </div>

</body>

</html>