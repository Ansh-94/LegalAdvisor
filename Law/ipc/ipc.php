<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('C:\xampp\htdocs\LegalAdvisor\includes\header1.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Penal Code</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
       
        .scrollable-content {
            max-height: 100px;
            overflow-y: auto;
            padding-right: 8px;
            scrollbar-width: none;
         
        }

        .scrollable-content::-webkit-scrollbar {
            display: none;
     
        }
    </style>
</head>

<body class="bg-purple-100 flex items-center justify-center min-h-screen p-5">

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-center mt-5 mb-6">Indian Penal Code</h1>
        <div id="data-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("ipc.json") 
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById("data-container");

                    data.forEach(section => {
                        let card = document.createElement("div");
                        card.className = "bg-white p-6 rounded-xl shadow-md border border-gray-300 hover:shadow-lg transition transform hover:scale-105";

                        card.innerHTML = `
                    <div class="flex justify-between items-center">
                        <div>
                            <h2 class="text-xl font-bold text-black">Chapter ${section.chapter}: ${section.chapter_title}</h2>
                            <p class="text-gray-600 text-sm font-semibold">Section ${section.Section}: ${section.section_title}</p>
                        </div>
                    </div>

                    <!-- Scrollable Content (Initially Hidden) -->
                    <div class="scrollable-content max-h-32 overflow-y-auto scrollbar-hide mt-3 p-3 bg-gray-50 rounded-md hidden">
                        <p class="text-gray-700 text-sm whitespace-pre-line">
                            ${section.section_desc || "No description available"}
                        </p>
                    </div>

                    <!-- Toggle Button -->
                    <button class="mt-3 px-4 py-2 bg-purple-700  text-white rounded-md transition-all duration-300 hover:bg-blue-700 toggle-btn">
                        More Details
                    </button>
                `;

                        container.appendChild(card);

                      
                        let toggleBtn = card.querySelector(".toggle-btn");
                        let description = card.querySelector(".scrollable-content");

                        toggleBtn.addEventListener("click", function () {
                            description.classList.toggle("hidden");
                        });
                    });
                })
                .catch(error => console.error("Error fetching JSON:", error));
        });

    </script>

</body>

</html>