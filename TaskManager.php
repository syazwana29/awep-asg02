<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Task Manager</title>

    <style>
    </style>
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative">
    <img src=" ./assets/left-arrow.png" alt="backarrow" class="h-10 w-10">
    <p class="text-xl font-bold text-center">Task Manager</p>
    <br>
    <br>
    <p id="todoTitle" class="text-3xl pl-12"> To Do</p>
    <br>
    <br>

    <div id="taskList" style="display: flex; flex-direction: column; align-items: center; font-size:20px;">
        <button class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;" onclick="handleButtonClick(this, 'Organise Books')">
            Organise Books
        </button>
        <button class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;" onclick="handleButtonClick(this, 'Finish UXD Checklist')">
            Finish UXD Checklist

        </button>
        <button class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;" onclick="handleButtonClick(this, ' Create Survey for UI')">
            Create Survey for UI
            <button class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;" onclick="handleButtonClick(this, 'Wash Dishes')">
                Wash Dishes
            </button>
            <button class="task-container bg-white rounded-lg p-4 mb-4" style="width:80%;" onclick="handleButtonClick(this, 'Edit CLS Video')">
                Edit CLS Video
            </button>

    </div>
    <p id="doneTitle" class="text-3xl pl-12" style="display: none;"> Done</p>
    <br>

    <div id="doneList" style="display: flex; flex-direction: column; align-items: center; font-size:20px;"></div>
    <!-- Navigation Bar at the Bottom -->
    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 px-4 py-2 z-10 flex justify-center"> <!-- Adjusted padding -->
        <div style="border-radius: 9999px; border: 4px solid white; padding: 5px;" onclick="window.location.href='NavigationTab.php'"> <!-- Adjusted border-width -->
            <img src="./assets/task.png" alt="task" style="height: 40px;"> <!-- Adjusted height -->
        </div>


        <script>
            function handleButtonClick(button, taskName) {
                const doneList = document.getElementById('doneList');
                const taskList = document.getElementById('taskList');

                if (button.parentNode === taskList) {
                    // The button is in the "To Do" list, so move it to the "Done" list
                    button.style.backgroundColor = 'rgba(255, 0, 0, 0.6)';
                    doneList.appendChild(button);

                    // Show the "Done" paragraph
                    const doneTitle = document.getElementById('doneTitle');
                    doneTitle.style.display = 'block';

                    // Check if there are any buttons left in the task list
                    if (taskList.getElementsByTagName('button').length === 0) {

                        // If there are no buttons left, hide the "To Do" paragraph
                        const todoTitle = document.getElementById('todoTitle');
                        todoTitle.style.display = 'none';
                    }
                } else {
                    // The button is in the "Done" list, so move it back to the "To Do" list
                    button.style.backgroundColor = 'white';
                    taskList.appendChild(button);

                    // Check if there are any buttons left in the done list
                    if (doneList.getElementsByTagName('button').length === 0) {
                        // If there are no buttons left, hide the "Done" paragraph
                        const doneTitle = document.getElementById('doneTitle');
                        doneTitle.style.display = 'none';
                    }
                }
            }
        </script>

</body>

</html>