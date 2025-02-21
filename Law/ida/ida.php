<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('C:\xampp\htdocs\LegalAdvisor\includes\header1.php'); // Ensure this path is correct
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Divorce Act</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Hide scrollbar but allow scrolling */
        .scrollable-content {
            max-height: 100px;
            overflow-y: auto;
            padding-right: 8px;
            scrollbar-width: none;
            /* Firefox */
        }

        .scrollable-content::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari */
        }
    </style>
</head>

<body class="bg-purple-100 flex items-center justify-center min-h-screen p-5">



    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-center mt-5 mb-6">Indian Divorce Act</h1>
        <div id="data-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("ida.json") // Replace with "data.json" if using a local file
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById("data-container");

                    data.forEach(section => {
                        let card = document.createElement("div");
                        card.className = "bg-white p-6 rounded-xl shadow-md border border-gray-300 hover:shadow-lg transition transform hover:scale-105";

                        card.innerHTML = `
        <div class="flex items-center space-x-3">
            <div>
                <h2 class="text-xl font-bold text-black">Section ${section.section}</h2>
                <p class="text-gray-600 text-sm">${section.title}</p>
            </div>
        </div>

        <!-- Scrollable Content (Initially Hidden) -->
        <div class="scrollable-content max-h-24 overflow-y-auto scrollbar-none mt-3 p-3 bg-gray-50 rounded-md hidden">
            <p class="text-gray-700 text-sm">
                ${section.description || "No description available"}
            </p>
        </div>

        
        <!-- Toggle Button -->
        <button class="mt-3 px-4 py-2 bg-purple-700 text-white rounded-md  transition-all duration-300 hover:bg-indigo-700 toggle-btn">
            More Details
        </button>
    `;






                        container.appendChild(card);

                        // Add event listener to the button
                        let button = card.querySelector(".toggle-btn");
                        let description = card.querySelector(".scrollable-content");

                        button.addEventListener("click", function () {
                            description.classList.toggle("hidden");
                            button.textContent = description.classList.contains("hidden") ? "More Details" : "Less Details";
                        });
                    });
                })
                .catch(error => console.error("Error fetching JSON:", error));
        });

        function toggleDescription(button) {
            let description = button.nextElementSibling;
            description.classList.toggle("hidden");
        }
    </script>

</body>

</html>