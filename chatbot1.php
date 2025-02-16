<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user'])) {
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=add" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body class="h-screen bg-gray-100">

    <?php
    include('includes/header.php');
    ?>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
        function toggleMoreSidebar() {
            document.getElementById('moreSidebar').classList.toggle('-translate-x-full');
        }
    </script>

    <!-- AI Chatbot Code Continues -->

    <div class="flex h-[90%] bg-gray-100">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-5 flex flex-col rounded">
            <h2 class="text-lg font-bold mb-5">AnyChat</h2>
            <ul class="space-y-2">
                <li class="p-2 rounded hover:bg-gray-700 cursor-pointer">New Chat</li>
                <li class="p-2 rounded hover:bg-gray-700 cursor-pointer">Photo Generation</li>
                <li class="p-2 rounded hover:bg-gray-700 cursor-pointer">Weather Updates</li>
            </ul>
        </div>

        <!-- Chat Container -->
        <div class="flex-1 flex flex-col p-5 bg-white border-l border-gray-300  text-black ">

            <!-- Chat Header -->
            <div class="text-xl font-bold border-b  pb-2">AI Chatbot</div>

            <div id="botReply" class="h-[80%] p-4 space-y-3 bg-gray-100 rounded-lg mt-3 shadow-inner overflow-y-auto">
                <!-- Chat messages will be appended here -->
            </div>




            <!-- Chat Input -->
            <div class="mt-3 rounded">
                <textarea id="userMessage" placeholder="Enter your message..."
                    class="w-full p-2 rounded border border-gray-300 text-lg"></textarea>
                <input type="text" id="imageUrl" placeholder="Enter Image URL (optional)"
                    class="w-full p-2 mt-2 rounded border border-gray-300 text-lg">
                <button onclick="sendMessage()"
                    class="w-full p-2 mt-2 bg-green-600 text-white rounded text-lg hover:bg-green-700">Send</button>
                <p class="loader hidden mt-2 text-center">⏳ Thinking...</p>
            </div>
        </div>

        <script>
            function sendMessage() {
                let message = document.getElementById("userMessage").value.trim();
                let imageUrl = document.getElementById("imageUrl").value.trim();
                let botReplyDiv = document.getElementById("botReply");
                let loader = document.querySelector(".loader");

                if (message === "") {
                    alert("Please enter a message.");
                    return;
                }

                // Append user message
                botReplyDiv.innerHTML += `<div class="bg-blue-100 p-2 rounded text-blue-800 text-left"><strong>You:</strong> ${message}</div>`;

                // Show loader
                loader.classList.remove("hidden");

                // Simulate chatbot response
                fetch("chatbot.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ message: message, image_url: imageUrl })
                })
                    .then(response => response.json())
                    .then(data => {
                        loader.classList.add("hidden");
                        botReplyDiv.innerHTML += `<div class="bg-gray-200 p-2 rounded text-gray-800 text-left"><strong>Bot:</strong> ${data.reply}</div>`;
                    })
                    .catch(error => {
                        loader.classList.add("hidden");
                        botReplyDiv.innerHTML += `<div class="bg-red-100 p-2 rounded text-red-800 text-left"><strong>Error:</strong> Unable to get response.</div>`;
                        console.log("Error:", error);
                    });

                // Clear input field
                document.getElementById("userMessage").value = "";
            }
        </script>
    </div>
</body>

</html>