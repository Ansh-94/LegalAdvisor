<<<<<<< HEAD
=======


>>>>>>> 4893f4c6960ff01675fb18055efa9a0cf38b1cd6
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code of Criminal Procedure, 1973</title>
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
include('includes/header.php');
<<<<<<< HEAD

=======
>>>>>>> 4893f4c6960ff01675fb18055efa9a0cf38b1cd6
<body class="bg-purple-100 flex items-center justify-center min-h-screen p-5">

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-center mb-6">Code of Criminal Procedure, 1973</h1>
        <div id="data-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"></div>
    </div>

    <script>
<<<<<<< HEAD
        document.addEventListener("DOMContentLoaded", function () {
            fetch("crpc.json") // Replace with actual JSON file if using locally
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById("data-container");

                    data.forEach(section => {
                        let card = document.createElement("div");
                        card.className = "bg-white p-6 rounded-xl shadow-md border border-gray-300 hover:shadow-lg transition transform hover:scale-105";

                        card.innerHTML = `
                    <div class="flex items-center space-x-3">
=======
       document.addEventListener("DOMContentLoaded", function () {
    fetch("crpc.json") // Replace with actual JSON file if using locally
        .then(response => response.json())
        .then(data => {
            let container = document.getElementById("data-container");

            data.forEach(section => {
                let card = document.createElement("div");
                card.className = "bg-white p-6 rounded-xl shadow-md border border-gray-300 hover:shadow-lg transition transform hover:scale-105";

                card.innerHTML = `
                    <div class="flex justify-between items-center">
>>>>>>> 4893f4c6960ff01675fb18055efa9a0cf38b1cd6
                        <div>
                            <h2 class="text-xl font-bold text-black">Chapter ${section.chapter}, Section ${section.section}</h2>
                            <p class="text-gray-600 text-sm">${section.section_title}</p>
                        </div>
                    </div>

                    <!-- Scrollable Content (Initially Hidden) -->
                    <div class="scrollable-content max-h-32 overflow-y-auto scrollbar-hide mt-3 p-3 bg-gray-50 rounded-md hidden">
                        <p class="text-gray-700 text-sm whitespace-pre-line">
                            ${section.section_desc || "No description available"}
                        </p>
                    </div>

                    <!-- Toggle Button -->
                    <button class="mt-3 px-4 py-2 bg-purple-700 text-white rounded-md transition-all duration-300 hover:bg-indigo-700 toggle-btn">
                        More Details
                    </button>
                `;

<<<<<<< HEAD
                        container.appendChild(card);

                        // Add event listener for toggle button
                        let toggleBtn = card.querySelector(".toggle-btn");
                        let description = card.querySelector(".scrollable-content");

                        toggleBtn.addEventListener("click", function () {
                            description.classList.toggle("hidden");
                        });
                    });
                })
                .catch(error => console.error("Error fetching JSON:", error));
        });
=======
                container.appendChild(card);

                // Add event listener for toggle button
                let toggleBtn = card.querySelector(".toggle-btn");
                let description = card.querySelector(".scrollable-content");

                toggleBtn.addEventListener("click", function () {
                    description.classList.toggle("hidden");
                });
            });
        })
        .catch(error => console.error("Error fetching JSON:", error));
});
>>>>>>> 4893f4c6960ff01675fb18055efa9a0cf38b1cd6


    </script>

</body>

</html>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Sections Viewer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        .scroll-container::-webkit-scrollbar {
            width: 8px;
        }
        .scroll-container::-webkit-scrollbar-thumb {
            background-color: #4f46e5;
            border-radius: 4px;
        }
        .scroll-container::-webkit-scrollbar-track {
            background: #e0e7ff; 
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-100 to-purple-200 min-h-screen flex items-center justify-center p-8">

    <div class="container mx-auto bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl border border-gray-300">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Legal Sections</h1>
        
       
        <div id="data-container" class="scroll-container max-h-[500px] overflow-y-auto grid gap-4 p-4 bg-gray-50 rounded-lg border border-gray-200 shadow-inner">
        
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            fetch("data.php") 
                .then(response => response.json())
                .then(data => {
                    let container = document.getElementById("data-container");

                    data.forEach((section, index) => {
                        let colors = ["bg-blue-200", "bg-green-200", "bg-yellow-200", "bg-pink-200", "bg-purple-200"];
                        let hoverColors = ["hover:bg-blue-300", "hover:bg-green-300", "hover:bg-yellow-300", "hover:bg-pink-300", "hover:bg-purple-300"];
                        let borderColors = ["border-blue-400", "border-green-400", "border-yellow-400", "border-pink-400", "border-purple-400"];

                        let card = document.createElement("div");
                        let colorIndex = index % colors.length;
                        
                        card.className = `p-5 rounded-lg shadow-md border ${borderColors[colorIndex]} ${colors[colorIndex]} transition-all duration-300 ease-in-out hover:shadow-lg ${hoverColors[colorIndex]}`;

                        card.innerHTML = `
                            <h2 class="text-lg font-semibold text-gray-900">Section ${section.section}: ${section.title}</h2>
                            <button class="mt-2 text-white bg-indigo-600 px-4 py-2 rounded-md transition-all duration-300 hover:bg-indigo-700" onclick="toggleDescription(this)">
                                More Details
                            </button>
                            <p class="text-gray-700 mt-3 hidden">${section.description || "No description available"}</p>
                        `;

                        container.appendChild(card);
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
</html> -->