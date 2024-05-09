<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Notes</title>
</head>

<body class="bg-blue-100">
  <div>
    <img src=" ./assets/left-arrow.png" alt="backarrow" class="h-10 w-10" onclick="window.history.back();">
    <h1 class="text-2xl absolute font-semibold ml-36">Notes</h1>
  </div>

  <h1 class="font-bold text-3xl ml-6 mt-16">All notes</h1>

  <div class="border rounded-lg px-4 py-4">
    <p class="text-gray-600">Big Data Analytics...</p>
    <p class="text-gray-600">For different stages of business analytics...</p>
    <div class="container mx-auto p-4 mt-4">
      <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="font-bold text-xl">Big Data Analytic</h1>
        <p class="mt-2">For different stages of business analytics huge amount
          of data is processed ay various steps. Depending on the
          stage of...</p>
        <a href="dataAnalytic.php" class="text-blue-500">Learn More</a>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 mt-2">
        <h1 class="font-bold text-xl">Data Growth</h1>
        <p class="mt-2">One of the most pressing Big Data challenges is
          storage. Data is growing exponentially with time, and
          with...</p>
        <a href="dataGrowth.php" class="text-blue-500">Learn More</a>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 mt-2">
        <h1 class="font-bold text-xl">Data Challenges</h1>
        <p class="mt-2">Big Data has seen normalcy in most business today,
          but that doesn't mean that the journey is always
          smooth. Ga...</p>
        <a href="dataChallenges.php" class="text-blue-500">Learn More</a>
      </div>
      <div class="bg-white rounded-lg shadow-md p-6 mt-2">
        <h1 class="font-bold text-xl">Real Life use cases</h1>
        <p class="mt-2">Big Data can help you address a range of business
          activities, from customer experience to analytics. Here
          are just a few...</p>
        <a href="realLife.php" class="text-blue-500">Learn More</a>
      </div>
    </div>

    <div class="fixed bottom-0 left-0 w-full bg-yellow-300 px-4 py-2 z-10 flex justify-center"> <!-- Adjusted padding -->
      <div style="border-radius: 9999px; border: 4px solid white; padding: 5px;" onclick="window.location.href='NavigationTab.php'"> <!-- Adjusted border-width -->
        <img src="./assets/notes.png" alt="task" style="height: 40px;"> <!-- Adjusted height -->
      </div>
</body>