<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
    // echo "<script>  alert('Login Required!');});</script>";
    header("Location: log.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Chatbot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


</head>

<body class=" h-screen bg-gray-100 flex flex-col">

    <div class="w-[100%]">
        <?php
        include('includes/header.php');
        ?>
    </div>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        function toggleMoreSidebar() {
            document.getElementById('moreSidebar').classList.toggle('-translate-x-full');
        }
    </script>


    <div class="flex h-[90%] bg-gray-100 w-full">

        <div class="w-64 bg-gray-800 text-white p-5 flex flex-col rounded">
            <h1 class="text-xl font-bold mb-6">AnyChat</h1>
            <ul class="space-y-2">
                <li class="p-2 rounded hover:bg-gray-700 cursor-pointer">New Chat</li>
                
            </ul>
        </div>


        <div class="flex-1 p-6 ">
            <h2 class="text-2xl font-bold mb-4">AI Chatbot</h2>
            <div class="bg-gray-200 rounded-lg p-4 h-96 overflow-auto chatbot-body"></div>

            <div class="mt-4">
                <input type="text" placeholder="Enter your message..."
                    class="message-input w-full p-3 border rounded-lg mb-2">
                <!-- <input type="text" placeholder="Enter Image URL (optional)" class="w-full p-3 border rounded-lg mb-2"> -->
                <button class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700"
                    id="send-message">Send</button>
            </div>
        </div>
    </div>

    <script src="js/browser.js"></script>
    <script src="js/script.js"></script>
</body>

</html>