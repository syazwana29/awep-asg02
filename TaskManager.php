<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Task Manager</title>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <img src="./assets/left-arrow.png" alt="backarrow" class="h-10 w-10">
    <p class="text-xl font-bold text-center">Task Manager</p>
    <br>
    <br>
    <p class="text-3xl pl-12"> To Do</p>
    <br>
    <br>
    <div style="display: flex; flex-direction: column; align-items: center; font-size:20px;">
        <div class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;">
            <p style="text-align:center;">Organise Books</p>
        </div>
        <div class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;">
            <p style="text-align:center;">Finish UXD Checklist</p>
        </div>
        <div class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;">
            <p style="text-align:center;">Create Survey for UI</p>
        </div>
        <div class="task-container bg-white rounded-lg p-5 mb-4" style="width:80%;">
            <p style="text-align:center;">Wash Dishes</p>
        </div>
        <div class="task-container bg-white rounded-lg p-5 mb-4" style="width:80%;">
            <p style="text-align:center;">Edit CLS Video</p>
        </div>
    </div>




    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 p-10 z-10">
        <ul class="flex justify-center">

        </ul>
    </div>
</body>

</html>