<?php
$password = "JaneDoe123";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Settings</title>
<<<<<<< HEAD

=======
    <style>
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);

            /* Black w/ opacity */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
>>>>>>> 9b32482be9cea3b8a789290f7504728d9799f3b1
</head>

<body class="bg-gradient-to-b from-white to-blue-200 h-screen relative flex flex-col">

</body>
<div style="position: relative; height: 30%;">
    <img src="./assets/purpleback.png" alt="" style="height: 110%; width: 100%;">
    <img src="./assets/userPic.png" alt="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 150px; height:150px;">


    <img src="./assets/left-arrow.png" alt="backarrow" class="h-10 w-10" onclick="window.history.back();" style="position: absolute; top: 0; left: 0;">
    <br>
    <div>
        <h1 style="color: #78318C; text-align: center; font-size: 2em; font-weight:bold;">Jane Doe</h1>
        <br>
        <div style="display: grid; align-items: center; justify-content: center; gap: 20px;">
            <div style="display: flex; align-items: center;">
                <img src="./assets/user.png" alt="" style="margin-right: 30px; width: 50px; height: 50px;">
                <p style="font-weight: bold;">Jane Doe</p>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="./assets/phoneNo.png" alt="" style="margin-right: 30px; width: 50px; height: 50px;">
                <p style="font-weight: bold;">+673 123 4567</p>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="./assets/email.png" alt="" style="margin-right: 30px; width: 50px; height: 50px;">
                <p style="font-weight: bold;">JaneDoe@gmail.com</p>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="./assets/password.png" alt="" style="margin-right: 30px; width: 50px; height: 50px;" onclick="showPassword()">
                <p style="font-weight: bold;" onclick="showPassword()">Password</p>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div style="font-size:30px; background-color: #78318C; border: 3px solid white; height: 50px;" class="rounded-lg p-4 w-1/2 mx-auto flex items-center justify-center text-center text-white" onclick="window.location.href='login.php'">
        Sign Out
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <p><?php echo $password; ?></p>
    </div>
</div>

<!-- End of Modal -->

<script type="text/javascript">
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the password, open the modal 
    function showPassword() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</html>